<?php

namespace App\Controllers;
use App\Models\ClientModel;
use App\Models\VisaRequestModel;
use App\Models\StatusModel;
use App\Models\CountryModel;
use App\Models\VisaTypeModel;
use App\Models\NotesModel;

class ClientController extends BaseController
{
    public $session;
    protected $ClientModel;
    protected $VisaRequestModel;
    protected $StatusModel;
    protected $CountryModel;
    protected $VisaTypeModel;
    protected $NotesModel;
    public function __construct()
    {
        $this->session = session();
        $this->ClientModel = new ClientModel();
        $this->VisaRequestModel = new VisaRequestModel();
        $this->StatusModel = new StatusModel();
        $this->CountryModel = new CountryModel();
        $this->VisaTypeModel = new VisaTypeModel();
        $this->NotesModel = new NotesModel();
    }

   
    public function login()
    {

        if($this->session->has('is_client_logged_in')){ return redirect()->to(base_url().'client_home'); }
		if($this->request->getmethod() == 'POST')
		{
			$user_name = $this->request->getVar('user_name');
			$password = $this->request->getVar('password');
			$clientdata = $this->ClientModel->verifyUserName($user_name);
     
			if($clientdata)
			{
				if($clientdata['is_active'] == 0)
				{
					$this->session->setTempdata('error','Client Deactivated',3);
					return redirect()->to(base_url());	
				}

				if (password_verify($password, $clientdata['password'])) 
				{
					$this->session->set('is_client_logged_in',$clientdata['client_id']);
                    $this->session->set('logged_in_client_name',$clientdata['org_name']);

                    return redirect()->to(base_url().'client_home');
				}
				else{
					$this->session->setTempdata('error','Email or Password is invalid',3);
                    return redirect()->to(base_url());
				}

			}else{
			  $this->session->setTempdata('error','Email or Password is invalid',3);
			  return redirect()->to(base_url());				  
			}

		}


        //get method
		return view('client_login');
    }

    public function client_logout()
	{
		session()->remove('is_client_logged_in');
		session()->destroy();
		return redirect()->to(base_url());
	}


    public function client_home()
    {

        if(!$this->session->has('is_client_logged_in')){ return redirect()->to(base_url()); }

		if($this->request->getmethod() == 'POST')
		{
			
		}
        $data['visaList']  = $this->VisaRequestModel->getVisaRequestListByClientId(session()->get('is_client_logged_in'));
        $data['statusCount']  = $this->VisaRequestModel->getVisaRequestBasedOnStatusByClientId(session()->get('is_client_logged_in'));

        $clientdata = $this->ClientModel->where('client_id',$this->session->get('is_client_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$clientdata]);
        echo view('client_visa_request_list',$data);
        echo view('layout/footer');
    }

    public function view_visa_request($visa_request_id = null)
	{
		
            if(!$this->session->has('is_client_logged_in')){ return redirect()->to(base_url()); }

            $visa_request_id = $this->request->getVar('visa_request_id');

            $data['clientData'] = $this->ClientModel->findall();
            $data['statusData'] = $this->StatusModel->findall();
            $data['countryData'] = $this->CountryModel->findall();
            $data['visaTypeData'] = $this->VisaTypeModel->findall();
          

            $data['visaData'] = $this->VisaRequestModel->getVisaRequestListByClientId(session()->get('is_client_logged_in'), $visa_request_id);
            $data['reqClientData'] = $this->ClientModel->where('client_id',$data['visaData']->client_id)->get()->getRow();
            $data['visaNotesData'] = $this->NotesModel-> getVisaRequestNotes($visa_request_id);

            $clientdata = $this->ClientModel->where('client_id',$this->session->get('is_client_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$clientdata]);
            echo view('client_visa_request_view',$data);
            echo view('layout/footer');

	}


    public function client_profile()
	{
		if(!$this->session->has('is_client_logged_in')){ return redirect()->to(base_url()); }
		if($this->request->getmethod() == 'POST')
		{
				//update client profile
				$clientData = $this->request->getVar();
				
                $clientData['updated_by'] = $this->session->get('is_client_logged_in');
				$client_id =  $this->request->getVar('client_id');
				$this->ClientModel->where('client_id', $client_id )->set($clientData)->update();

				echo true;
		}else{
		$clientdata = $this->ClientModel->where('client_id',$this->session->get('is_client_logged_in'))->get()->getRow();
		echo view('layout/header', ['Data'=>$clientdata]);
		echo view('client_profile',['client'=>$clientdata]);
		echo view('layout/footer');
		}
	}

    public function change_client_password($client_id)
    {
        $old_password =$this->request->getVar('old_password');
        $new_password =$this->request->getVar('new_password');
        $confirm_password =$this->request->getVar('confirm_password');


        $client = $this->ClientModel->where('client_id',$client_id)->first();
        $data_old_password = $client['password'];

        if (!password_verify($old_password, $data_old_password)) {
            $response = array(
                'status' => 'error',
                'message' => 'Old Password Not Match...'
            );
            return json_encode($response);
        } 

        if($new_password  != $confirm_password){
            $response = array(
                'status' => 'error',
                'message' => 'New Password And Confirm Password Not Match...'
            );
            return json_encode($response);
        }

        //$hashedPassword = password_hash($new_password, PASSWORD_DEFAULT); 
        $data['password'] = $new_password;
        
        if ($this->ClientModel->update($client_id, $data)) {
            $response = array(
                'status' => 'success',
                'message' => 'Password Change Succuessfully'
            );
            return json_encode($response);
        }

    }


	












}

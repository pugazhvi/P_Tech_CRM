<?php

namespace App\Controllers;
use App\Helpers\MailHelper;
use App\Models\StaffModel;
use App\Models\ClientModel;
use App\Models\BranchModel;

use CodeIgniter\API\ResponseTrait;


class StaffController extends BaseController
{
    public $session;
    protected $StaffModel;
	protected $ClientModel;
	protected $BranchModel;

	use ResponseTrait;

	
    public function __construct()
    {
        $this->session = session();
        $this->StaffModel = new StaffModel();
		$this->ClientModel = new ClientModel();
		$this->BranchModel = new BranchModel();
    }

   


    public function login()
    {

        if($this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'visa_request_list'); }
		if($this->request->getmethod() == 'POST')
		{
			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$staffdata = $this->StaffModel->verifyEmail($email);
     
			if($staffdata)
			{
				if($staffdata['is_active'] == 0)
				{
					$this->session->setTempdata('error','Staff Deactivated',3);
					return redirect()->to(base_url()."staff");	
				}

				if (password_verify($password, $staffdata['password'])) 
				{
					$this->session->set('is_staff_logged_in',$staffdata['staff_id']);
					$this->session->set('logged_in_staff_role',$staffdata['role']);
                    $this->session->set('logged_in_staff_branch_id',$staffdata['branch_id']);
                    $this->session->set('logged_in_staff_name',$staffdata['name']);

                    return redirect()->to(base_url().'visa_request_list');
				}
				else{
					$this->session->setTempdata('error','Email or Password is invalid',3);
                    return redirect()->to(base_url()."staff");
				}

			}else{
			  $this->session->setTempdata('error','Email or Password is invalid',3);
			  return redirect()->to(base_url()."staff");				  
			}

		}


        //get method
		return view('staff_login');
    }

    public function staff_logout()
	{
		session()->remove('is_staff_logged_in');
		session()->destroy();
		return redirect()->to(base_url()."staff");
	}


 




	// staff crud
	public function staff_list()
	{
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

       
        $data['staffList'] =  $this->StaffModel->select('staff.* , branch.branch as branch_name')
		                              ->join('branch', 'staff.branch_id = branch.id') 
		                              ->where('staff.staff_id != ',session()->get('is_staff_logged_in') )
									  ->findAll();
        // dd($data);
        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('staff_list',$data);
        echo view('layout/footer');
	}
	public function staff_edit($staff_id = null)
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
		if($this->request->getmethod() == 'POST')
		{
				//update staff details
				$staffData = $this->request->getVar();
                $staffData['updated_by'] = $this->session->get('is_staff_logged_in');
				$staff_id =  $this->request->getVar('id');
				$this->StaffModel->where('staff_id', $staff_id )->set($staffData)->update();

				return redirect()->to(base_url()."staff_list");
		}else{

            $data['staffData'] =  $this->StaffModel->where('md5(staff.staff_id)', $this->request->getVar('staff_id') )->get()->getRow();
			$data['branchData'] = $this->BranchModel->findAll();
            $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
          
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('staff_form',$data);
            echo view('layout/footer');

        }

	}
	public function staff_create()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
				$staffData = $this->request->getVar();
                $staffData['created_by'] = $this->session->get('is_staff_logged_in');
				$insert = $this->StaffModel->save($staffData);
				if($insert) 
				{
					return redirect()->to(base_url()."staff_list"); 
				}
		
		}else{

			$data['branchData'] = $this->BranchModel->findAll();

		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('staff_form',$data);
            echo view('layout/footer');
        }
	}


    // client crud
	public function client_list()
	{
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

       
        $data['clientList'] =  $this->ClientModel->findAll();
        
        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('client_list',$data);
        echo view('layout/footer');
	}
	public function client_edit()
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
		if($this->request->getmethod() == 'POST')
		{
				//update staff details
				$clientData = $this->request->getVar();
                $clientData['updated_by'] = $this->session->get('is_staff_logged_in');
				$client_id =  $this->request->getVar('id');
				$this->ClientModel->where('client_id', $client_id )->set($clientData)->update();

				return redirect()->to(base_url()."client_list");
		}else{

            $data['clientData'] =  $this->ClientModel->where('md5(client.client_id)', $this->request->getVar('client_id') )->get()->getRow();
            $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
          
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('client_form',$data);
            echo view('layout/footer');

        }

	}
	public function client_create()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
				$clientData = $this->request->getVar();
                $clientData['created_by'] = $this->session->get('is_staff_logged_in');
				$insert = $this->ClientModel->save($clientData);
				if($insert) 
				{
					return redirect()->to(base_url()."client_list"); 
				}
		
		}else{

		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('client_form');
            echo view('layout/footer');
        }
	}


	// Visa type crud
	public function visa_type()
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		
		$data['clientList'] =  $this->ClientModel->findAll();
		
		$staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
		echo view('layout/header', ['Data'=>$staffdata]);
		echo view('client_list',$data);
		echo view('layout/footer');
	}

	//Countries crud
	public function countries()
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		
		$data['clientList'] =  $this->ClientModel->findAll();
		
		$staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
		echo view('layout/header', ['Data'=>$staffdata]);
		echo view('client_list',$data);
		echo view('layout/footer');
	}


	public function staff_profile()
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
		if($this->request->getmethod() == 'POST')
		{
				//update staff profile
				$staffData = $this->request->getVar();
				print_r($staffData);
                $staffData['updated_by'] = $this->session->get('is_staff_logged_in');
				$staff_id =  $this->request->getVar('staff_id');
				$this->StaffModel->where('staff_id', $staff_id )->set($staffData)->update();

				echo true;
		}else{
		$staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
		echo view('layout/header', ['Data'=>$staffdata]);
		echo view('staff_profile',['staff'=>$staffdata]);
		echo view('layout/footer');
		}
	}

	public function change_staff_password($staff_id, $admin="")
    {
        $old_password =$this->request->getVar('old_password');
        $new_password =$this->request->getVar('new_password');
        $confirm_password =$this->request->getVar('confirm_password');


        $staff = $this->StaffModel->where('staff_id',$staff_id)->first();
        $data_old_password = $staff['password'];

        if(!$admin == 'admin'){
			if (!password_verify($old_password, $data_old_password)) {
				$response = array(
					'status' => 'error',
					'message' => 'Old Password Not Match...'
				);
				return json_encode($response);
			} 
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
        
        if ($this->StaffModel->update($staff_id, $data)) {
            $response = array(
                'status' => 'success',
                'message' => 'Password Change Succuessfully'
            );
            return json_encode($response);
        }

    }


	public function forgot_password()
	{
		
		if($this->request->getmethod() == 'POST')
		{
			$email = $this->request->getVar('email');
			$staff_data = $this->StaffModel->where('email', $email)->find();

			
			if ($staff_data) 
			{
			  $otp = rand(1000 , 9999);
			  $MailHelper = new MailHelper();
              $MailHelper->send_otp_email($this->request->getVar('email') , $otp );
			   
			  $data['status'] = 'success';
			  $data['otp'] = $otp;
			  echo json_encode($data);
			} 
			else 
			{
			  $data['status'] = 'failed';
			  echo json_encode($data);
			}

		}else{

			return view('forgot_password.php');
		}
	}

	public function verify_otp()
	{
		
		if($this->request->getmethod() == 'POST')
		{
			$otp = $this->request->getVar('otp');
			$verify_otp = $this->request->getVar('verify_otp');
			
				if ($otp == $verify_otp) 
				{
					$email =  $this->request->getVar('email');
					$data = $this->StaffModel->where('email', $email)->find();
					if ($data) 
					{
						$this->session->setTempdata('staff_id',$data[0]['staff_id'],3);
						$this->session->setTempdata('email',$data[0]['email'],3);
						$this->session->setTempdata('mail_success', "OTP verified sucessfully",3);
						return view('reset_password.php');
					} 
				} 
				else 
				{
					$this->session->setTempdata('error', "You entered wrong OTP.Please retry",3);
					return view('forgot_password.php');
				}
			

		}
	}

	public function change_password()
	{
		
		if($this->request->getmethod() == 'POST')
		{
			$staffData = $this->request->getVar();
			$staff_id =  $this->request->getVar('staff_id');
			$this->StaffModel->where('staff_id', $staff_id )->set($staffData)->update();
			$this->session->setTempdata('mail_success', "Password set sucessfully",3);
			return redirect()->to(base_url()."staff");
			

		}
	}


    public function status_staff()
    {

        try {
            $staff_id = $this->request->getPost('staff_id');
            $is_active = $this->request->getPost('is_active'); 
            
            $data = [
                'is_active' => $is_active
            ];
            $updated = $this->StaffModel->update($staff_id, $data);
            // $staff_list = $this->StaffModel->orderBy('org_name','asc')->findAll();
            $staff_list = $this->StaffModel->select('staff.* , branch.branch as branch_name')
										   ->join('branch', 'staff.branch_id = branch.id') 
										   ->where('staff.staff_id != ',session()->get('is_staff_logged_in') )
										   ->findAll();

            if ($updated) {
                $result = $data;
                return $this->respond(['status' => 'success','code' => 200,'data' => $staff_list],200);
            } else {
                $result = "No Match's";
                return $this->respond(['status' => 'failed','code' => 404,'data' => $result],404);
            }
        } catch (\Exception $exception) {
            return $this->respond(['status' => 'failed','code' => 500,'data' => $exception],500);
       }
    }






}

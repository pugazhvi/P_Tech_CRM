<?php

namespace App\Controllers;

use App\Helpers\MailHelper;
use App\Models\StaffModel;
use App\Models\VisaRequestModel;
use App\Models\ClientModel;
use App\Models\StatusModel;
use App\Models\CountryModel;
use App\Models\VisaTypeModel;
use App\Models\NotesModel;
use App\Models\CompanyModel;

class VisaRequestController extends BaseController
{
    public $session;
    protected $StaffModel;
    protected $VisaRequestModel;
    protected $ClientModel;
    protected $StatusModel;
    protected $CountryModel;
    protected $VisaTypeModel;
    protected $NotesModel;
    protected $CompanyModel;
    
    public function __construct()
    {
        $this->session = session();
        $this->StaffModel = new StaffModel();
        $this->VisaRequestModel = new VisaRequestModel();
        $this->ClientModel = new ClientModel();
        $this->StatusModel = new StatusModel();
        $this->CountryModel = new CountryModel();
        $this->VisaTypeModel = new VisaTypeModel();
        $this->NotesModel = new NotesModel();
        $this->CompanyModel = new CompanyModel();
       
    }

    public function index()
    {

        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('plain_page');
        echo view('layout/footer');

    }

    public function visa_request_list()
    {
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

        $data['client_list'] =  $this->ClientModel->where('is_active',1)->findAll();       
        $data['status_master'] = $this->StatusModel->where('is_active',1)->findAll();
        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('visa_request_list',$data);
        echo view('layout/footer');
    }




	public function create_visa_request()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
                $cleint_id = $this->request->getPost('client_id');
				$visaData = $this->request->getVar();

                $file = $this->request->getFile('file');

                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(WRITEPATH . 'uploads', $newName);
        
                    $fileInfo = [
                        'name' => $file->getName(),
                        'type' => $file->getClientMimeType(),
                        'size' => $file->getSize(),
                        'path' => WRITEPATH . 'uploads/' . $newName,
                    ];
        
                    $file_name = $newName;
                }

                $visaData['branch_id'] = $this->session->get('logged_in_staff_branch_id');
                $visaData['request_id'] = 'UVS-0'.$this->session->get('logged_in_staff_branch_id').'-'.rand(10,99).rand(10,99).rand(10,99);
				$id = $this->VisaRequestModel->insert($visaData);
				if($id) 
				{
                    $this->NotesModel->save(['visa_request_id'=>$id,'status'=>$visaData['status'],'notes'=>$visaData['notes'], 'created_by'=>$this->session->get('is_staff_logged_in'), 'file'=> isset( $file_name) ?  $file_name : null]);
                    $MailHelper = new MailHelper();
                    $MailHelper->send_email($id);
                    session()->setFlashdata('client_id', $cleint_id);

					return redirect()->to(base_url()."visa_request_list"); 
				}
		
		}else{
           
            $data['clientData'] = $this->ClientModel->where('is_active',1)->findall();
            $data['statusData'] = $this->StatusModel->findall();
            $data['countryData'] = $this->CountryModel->findall();
            $data['visaTypeData'] = $this->VisaTypeModel->findall();
		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('visa_request_form',$data);
            echo view('layout/footer');
        }
	}
   
    public function edit_visa_request($visa_request_id = null)
	{
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
		if($this->request->getmethod() == 'POST')
		{
				//update visa details
				$visaData = $this->request->getVar();

               
				$visa_request_id =  $this->request->getVar('visa_request_id');
				$update = $this->VisaRequestModel->where('visa_request_id', $visa_request_id )->set($visaData)->update();
                
                if($update)
				echo true;
                else
                echo false;
		}else{

            $visa_request_id = $this->request->getVar('visa_request_id');
           
           
           

            $data['visaData'] = $this->VisaRequestModel->getVisaRequestList(session()->get('logged_in_staff_branch_id'), $visa_request_id);
            $data['visaNotesData'] = $this->NotesModel-> getVisaRequestNotes($visa_request_id);
            $data['reqClientData'] = $this->ClientModel->where('client_id',$data['visaData']->client_id)->get()->getRow();
            $data['clientData'] = $this->ClientModel->findall();
            $data['statusData'] = $this->StatusModel->findall();
            $data['countryData'] = $this->CountryModel->findall();
            $data['visaTypeData'] = $this->VisaRequestModel->getVisaType($data['visaData']->country_of_visit);
            $data['companyData'] = $this->CompanyModel->where('client_id', $data['visaData']->client_id)->findAll();

		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('edit_request',$data);
            echo view('layout/footer');

        }

	}

    public function get_visa_type()
    {
        $countryId = $this->request->getVar('country_id');
       
        $result = $this->VisaRequestModel->getVisaType($countryId);

        $country_code =  $this->CountryModel->where('id',$countryId)->get()->getRow()->c_code;

        return $this->response->setJSON(['count'=>count($result) , 'data'=>$result , 'country_code'=>$country_code]);

    }


    public function download($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;

        if (file_exists($path)) {
            return $this->response->download($path, null);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($filename);
        }
    }

    public function update_notes()
    {
        $notesData = $this->request->getVar();

        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $file_name = $newName;
        }

        if($notesData['status'] == 6){

            $updateArray = ['status'=>$notesData['status'],'awb_no'=>$notesData['awb_no']];
            $insertArray = ['visa_request_id'=>$notesData['visa_request_id'],'status'=>$notesData['status'],'notes'=>$notesData['notes'], 'created_by'=>$this->session->get('is_staff_logged_in'),'awb_no'=>$notesData['awb_no'] , 'file'=> isset( $file_name) ?  $file_name : null ];
        
        }else if($notesData['status'] == 5){

            $is_visa_approved =  isset($notesData['is_visa_approved'])  ? 1 : 0;
            $updateArray = ['status'=>$notesData['status'],'is_visa_approved'=>$is_visa_approved];
            $insertArray = ['visa_request_id'=>$notesData['visa_request_id'],'status'=>$notesData['status'],'notes'=>$notesData['notes'], 'created_by'=>$this->session->get('is_staff_logged_in'),'is_visa_approved'=>$is_visa_approved , 'file'=> isset( $file_name) ?  $file_name : null];
        
        }else{

            $updateArray = ['status'=>$notesData['status']];
            $insertArray = ['visa_request_id'=>$notesData['visa_request_id'],'status'=>$notesData['status'],'notes'=>$notesData['notes'], 'created_by'=>$this->session->get('is_staff_logged_in') , 'file'=> isset( $file_name) ?  $file_name : null];
        }
        
        $update =$this->VisaRequestModel->where('visa_request_id',$this->request->getVar('visa_request_id') )
                          ->where('branch_id',$this->session->get('logged_in_staff_branch_id'))
                          ->set($updateArray)->update(); 
        if($update) 
        {
            $this->NotesModel->save($insertArray);
            $visaNotesData = $this->NotesModel-> getVisaRequestNotes(md5($notesData['visa_request_id']));
            $MailHelper = new MailHelper();
            $MailHelper->send_email($notesData['visa_request_id']);

            $html = '';
              foreach ($visaNotesData as $key => $notes) 
                {
                    if($notes['file'] != null){
                    $downloadIcon = '<a href="' . base_url("download/" . urlencode($notes['file'])) . '" title="Download"><i class="ri-attachment-2"></i></a>';
                    }else{
                        $downloadIcon = '';
                    }
                       
                    if($notes['status'] == 5)
                    { 
                        $text = ($notes['is_visa_approved'] == 1 ) ? ' (Visa Approved)' : ' (Visa Rejected)';
                        $statusValue = $notes['status_value'].$text; 
                    }else if($notes['status'] == 6)
                    { 
                        $statusValue = $notes['status_value']." (AWB : ".$notes['awb_no'].")"; 
                    }else
                    { 
                        $statusValue = $notes['status_value']; 
                    }

                    $html .= '<div class="media mb-3 pb-3 border-bottom"><div class="media-body note-status">';
                    $html .= '<h5 class="mt-0">'.$statusValue.$downloadIcon.'<small class="text-muted float-right"></small></h5>';
                    $html .= $notes['notes'];
                    $html .='<br/><a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"> <i class="mdi mdi-account-circle"></i> '.$notes['created_by'].' </a>';
                    $html .= '<small class="text-muted float-right mt-2"><i class="mdi mdi-calendar-clock"></i>'.date('d-M-Y h:i A', strtotime($notes['created_at'])).'</small></div></div>';
                   
                            
                } 

            // return $this->response->setJSON(['notes'=>$html , 'count'=>count($visaNotesData)]);
            return json_encode(['notes'=>$html , 'count'=>count($visaNotesData)]);
         

        }
    }
    
    public function create_company(){

       $insert =  $this->CompanyModel->insert($this->request->getPost());
       $client_id = $this->request->getPost('client_id');
       $companyData = $this->CompanyModel->where('client_id', $client_id)->findAll();
       if($insert){
        return json_encode(['companyData'=>$companyData, 'dataSelect'=> $insert]);
       }else{
        return json_encode('failed');
       }
    }

    public function get_company_list($cleint_id){
        $companyData = $this->CompanyModel->where('client_id', $cleint_id)->findAll();

        if(isset($companyData)){
            return json_encode(['status'=>true , 'data'=>$companyData]);
        }else{
            return json_encode(['status'=>false , 'data'=>'No Company Found']);
        }

    }

}

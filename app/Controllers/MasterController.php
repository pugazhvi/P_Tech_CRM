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
use App\Models\VisaSummaryModel;


class MasterController extends BaseController
{
    public $session;
    protected $StaffModel;
    protected $VisaRequestModel;
    protected $ClientModel;
    protected $StatusModel;
    protected $CountryModel;
    protected $VisaTypeModel;
    protected $NotesModel;
    protected $VisaSummaryModel;

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
        $this->VisaSummaryModel = new VisaSummaryModel();
       
    }

    


    public function visa_summary_list()
    {
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
        $data['visaSummaryList']  = $this->VisaSummaryModel->getVisaSummaryList();

        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('visa_summary_list',$data);
        echo view('layout/footer');

    }

    public function visa_summary_create()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
				$visaSummaryData = $this->request->getVar();
                // dd($visaSummaryData);
				$this->VisaSummaryModel->insert($visaSummaryData);
                return redirect()->to(base_url()."visa_summary_list"); 
			
		}else{
           
           
            $data['countryData'] = $this->CountryModel->findall();
            $data['visaCategoryData'] = $this->VisaTypeModel->findall();

		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('visa_summary_form',$data);
            echo view('layout/footer');
        }
	}

    public function visa_summary_edit()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
                $visaSummaryData = $this->request->getVar();

                $vs_id = $this->request->getVar('vs_id');
                $this->VisaSummaryModel->where('vs_id', $vs_id )->set($visaSummaryData)->update();
                return redirect()->to(base_url()."visa_summary_list"); 
			
		}else{
           
            $vs_id = $this->request->getVar('vs_id');
            $data['countryData'] = $this->CountryModel->findall();
            $data['visaSummaryData']  = $this->VisaSummaryModel->getVisaSummaryList($vs_id);
            $data['visaCategoryData'] = $this->VisaTypeModel->findall();

		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('visa_summary_form',$data);
            echo view('layout/footer');
        }
	}




    public function country_list()
    {
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
        $data['countryList']  = $this->CountryModel->findAll();

        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('country_list',$data);
        echo view('layout/footer');

    }

    public function country_create()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
				$CountryData = $this->request->getVar();
				$this->CountryModel->insert($CountryData);
                return redirect()->to(base_url()."country_list"); 
			
		}else{
           
           
		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('country_form',);
            echo view('layout/footer');
        }
	}

    public function country_edit()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
                $CountryData = $this->request->getVar();

                $id = $this->request->getVar('id');
                $this->CountryModel->where('id', $id )->set($CountryData)->update();
                return redirect()->to(base_url()."country_list"); 
			
		}else{
           
            $id = $this->request->getVar('id');
            $data['countryData'] = $this->CountryModel->where('id',$id)->get()->getRow();
         
		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('country_form',$data);
            echo view('layout/footer');
        }
	}



    public function category_list()
    {
        if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }
        $data['categoryList']  = $this->VisaTypeModel->findAll();

        $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
        echo view('layout/header', ['Data'=>$staffdata]);
        echo view('category_list',$data);
        echo view('layout/footer');

    }

    public function category_create()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
				$categoryData = $this->request->getVar();
				$this->VisaTypeModel->insert($categoryData);
                return redirect()->to(base_url()."category_list"); 
			
		}else{
           
           
		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('category_form',);
            echo view('layout/footer');
        }
	}

    public function category_edit()
	{   
		if(!$this->session->has('is_staff_logged_in')){ return redirect()->to(base_url().'staff'); }

		if($this->request->getmethod() == 'POST')
		{
                $categoryData = $this->request->getVar();

                $id = $this->request->getVar('id');
                $this->VisaTypeModel->where('id', $id )->set($categoryData)->update();
                return redirect()->to(base_url()."category_list"); 
			
		}else{
           
            $id = $this->request->getVar('id');
            $data['categoryData'] = $this->VisaTypeModel->where('id',$id)->get()->getRow();
         
		    $staffdata = $this->StaffModel->where('staff_id',$this->session->get('is_staff_logged_in'))->get()->getRow();
            echo view('layout/header', ['Data'=>$staffdata]);
            echo view('category_form',$data);
            echo view('layout/footer');
        }
	}








}

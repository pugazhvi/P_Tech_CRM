<?php namespace App\Models;

use CodeIgniter\Model;

class VisaRequestModel extends Model
{
    protected $table      = 'visa_request';
    protected $primaryKey = 'visa_request_id';
	
	protected $allowedFields = ['company_id','request_id','branch_id' , 'client_id' , 'passport_no',  'traveller_name' , 'country_of_visit', 'visa_type', 'trip_approval_no' , 'status' , 'awb_no' , 'is_visa_approved' , 'priority' , 'file' , 'is_active' ,'created_by','updated_by'];
	

    public function getVisaRequestList($branch_id = null,$visa_request_id = null)
    {
         $result =  $this->db->table('visa_request')
                         ->select('visa_request.* , client.branch as branch, client.agency as agency ,client.email as client_email , country.country as country_name , category.category as visa_type_name , status.status_value ')
                         ->join('client', 'visa_request.client_id = client.client_id') 
                         ->join('country', 'visa_request.country_of_visit = country.id') 
                         ->join('category', 'visa_request.visa_type = category.id') 
                         ->join('status', 'visa_request.status = status.status_id') 
                         ->where('visa_request.branch_id',$branch_id)
                         ->where('visa_request.is_active',1)
                         ->orderBy('visa_request.visa_request_id','DESC');
                        
                         
        if($visa_request_id != null){
            return $result->where('md5(visa_request.visa_request_id)',$visa_request_id)->get()->getRow();
        }else{ 
            return $result->get()->getResultArray();
        }
                          
    }

    public function getVisaRequestBasedOnStatus($branch_id)
    {
        
        $result = $this->db->table('status')
        ->select('COUNT(visa_request.status) as status_count, visa_request.client_id, status.status_value, status.status_id')
        ->join('visa_request', "visa_request.status = status.status_id AND visa_request.branch_id = {$branch_id}", 'left')
        ->where('status.is_active', 1)
        ->groupBy('status.status_id')
        ->get()
        ->getResultArray();

    


                         
      
         return $result;
    }

    public function getVisaRequestBasedOnStatusCLient_id($branch_id)
    {
        
        $result = $this->db->table('status')
        ->select('COUNT(visa_request.status) as status_count, visa_request.client_id, status.status_value, status.status_id')
        ->join('visa_request', "visa_request.status = status.status_id AND visa_request.branch_id = {$branch_id}", 'left')
        ->where('status.is_active', 1)
        ->groupBy('visa_request.client_id') // Group by client_id
        ->groupBy('status.status_id')
        ->get()
        ->getResultArray();
         return $result;
    }

    public function getVisaRequestListByClientId($client_id = null,$visa_request_id = null)
    {

         $result =  $this->db->table('visa_request')
                         ->select('visa_request.* ,company.company_name, branch.branch as branch_name  , client.branch as branch, client.agency as agency ,client.email as client_email , country.country as country_name ,  category.category as visa_type_name  , status.status_value ')
                         ->join('client', 'visa_request.client_id = client.client_id') 
                         ->join('company', 'visa_request.company_id = company.company_id') 
                         ->join('branch', 'visa_request.branch_id = branch.id') 
                         ->join('country', 'visa_request.country_of_visit = country.id') 
                         ->join('category', 'visa_request.visa_type = category.id') 
                         ->join('status', 'visa_request.status = status.status_id') 
                         ->where('visa_request.client_id',$client_id)
                         ->where('visa_request.is_active',1)
                         ->orderBy('visa_request.visa_request_id','DESC');
                        
                         
        if($visa_request_id != null){
            return $result->where('md5(visa_request.visa_request_id)',$visa_request_id)->get()->getRow();
        }else{ 
            return $result->get()->getResultArray();
        }
                          
    }

    public function getVisaRequestBasedOnStatusByClientId($client_id)
    {
        $result = $this->db->table('status')
                        ->select('COUNT(visa_request.status) as status_count, status.status_value, status.status_id')
                        ->join('visa_request', "visa_request.status = status.status_id and visa_request.client_id = {$client_id}", 'left')
                        ->where('status.is_active', 1)
                        ->groupBy('status.status_id')
                        ->get()
                        ->getResultArray();

                         
      
         return $result;
    }

    public function getVisaType($countryId)
    {
        $result =  $this->db->table('visa_summary')
                            ->select('category.*')
                            ->join('category', 'visa_summary.vs_category = category.id') 
                            ->where('visa_summary.vs_country',$countryId)
                            ->get()->getResultArray();

                         
      
         return $result;
    }
  

    public function getVisaRequestListClient($branch_id = null,$client_id = null)
    {
         $result =  $this->db->table('visa_request')
                         ->select('visa_request.* ,company.company_name, client.branch as branch, client.agency as agency ,client.email as client_email , country.country as country_name , category.category as visa_type_name , status.status_value ')
                         ->join('client', 'visa_request.client_id = client.client_id')
                         ->join('company', 'visa_request.company_id = company.company_id')  
                         ->join('country', 'visa_request.country_of_visit = country.id') 
                         ->join('category', 'visa_request.visa_type = category.id') 
                         ->join('status', 'visa_request.status = status.status_id') 
                         ->where('visa_request.branch_id',$branch_id)
                         ->where('visa_request.client_id',$client_id)
                         ->where('visa_request.is_active',1)
                         ->orderBy('visa_request.visa_request_id','DESC');
            return $result->get()->getResultArray();
                          
    }



}
<?php namespace App\Models;

use CodeIgniter\Model;

class NotesModel extends Model
{
    protected $table      = 'visa_request_notes';
    protected $primaryKey = 'visa_request_notes_id';
	
	protected $allowedFields = ['visa_request_id' , 'status' , 'awb_no' , 'is_visa_approved' , 'notes' , 'is_active' ,'created_by','updated_by'];
	


    public function getVisaRequestNotes($visa_request_id)
    {
         $result =  $this->db->table('visa_request_notes')
                         ->select('visa_request_notes.*,  status.status_value ,status.status_id , staff.name as created_by')
                         ->join('status', 'visa_request_notes.status = status.status_id') 
                         ->join('staff', 'visa_request_notes.created_by = staff.staff_id') 
                         ->where('visa_request_notes.visa_request_id',$visa_request_id)
                         ->where('visa_request_notes.is_active',1)
                         ->orderBy('visa_request_notes.visa_request_notes_id','DESC')
                         ->get()
                         ->getResultArray();
                         
      
         return $result;
    }
}
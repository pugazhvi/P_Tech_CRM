<?php namespace App\Models;

use CodeIgniter\Model;

class VisaSummaryModel extends Model
{
    protected $table      = 'visa_summary';
    protected $primaryKey = 'vs_id';
	
	protected $allowedFields = [
                                'vs_country' , 
                                'vs_country_code', 
                                'vs_category',
                                'vs_type',
                                'vs_processing',
                                'vs_processing_base' ,
                                'vs_stay',
                                'vs_stay_base',
                                'vs_entry', 
                                'vs_validity',
                                'vs_validity_base',
                                'vs_fee',
                                'vs_fee_child' ,
                                'vs_fee_currency',
                                'vs_vfs_fee',
                                'vs_vsf_fee_currency', 
                                'vs_uvs_fee',
                                'vs_sgst',
                                'vs_cgst',
                                'vs_igst' ,
                                'vs_total_fee'
                               ];

    public function getVisaSummaryList($vs_id = null)
    {
        $result =  $this->db->table('visa_summary')
                        ->select('visa_summary.* , country.country as country_name ,  category.category as category_name')
                        ->join('country', 'visa_summary.vs_country = country.id') 
                        ->join('category', 'visa_summary.vs_category = category.id');
                       
                        
        if($vs_id != null){
            return $result->where('visa_summary.vs_id',$vs_id)->get()->getRow();
        }else{ 
            return $result->get()->getResultArray();
        }                
    }

    public function getVisaCategory($countryId)
    {
        $result =  $this->db->table('visa_summary')
                            ->select('category.*')
                            ->join('category', 'visa_summary.vs_category = category.id') 
                            ->where('visa_summary.vs_country',$countryId)
                            ->get()->getResultArray();

                         
      
         return $result;
    }
	


  
}
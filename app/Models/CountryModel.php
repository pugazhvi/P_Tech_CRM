<?php namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model
{
    protected $table      = 'country';
    protected $primaryKey = 'id';
	
	protected $allowedFields = ['country' , 'path', 'c_code', 'code', 'no_of_workingdays', 'active' ,'created_by','updated_by'];
	


  
}
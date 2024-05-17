<?php namespace App\Models;

use CodeIgniter\Model;

class VisaTypeModel extends Model
{
    protected $table      = 'category';
    protected $primaryKey = 'id';
	
	protected $allowedFields = ['category' , 'status' ,'created_by','updated_by'];
	


  
}
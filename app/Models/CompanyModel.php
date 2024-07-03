<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table      = 'company';
    protected $primaryKey = 'company_id';
	
	protected $allowedFields = ['company_id','client_id','company_name'];
	
}
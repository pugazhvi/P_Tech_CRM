<?php namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table      = 'client';
    protected $primaryKey = 'client_id';
	
	protected $allowedFields = ['branch','agency', 'email', 'user_name' , 'password', 'address' , 'city' , 'state' , 'country' , 'pin_code'  , 'is_active' ,'created_by','updated_by'];
	
	protected $beforeInsert = ['beforeInsert'];
	protected $beforeUpdate = ['beforeUpdate'];
	
	protected function beforeInsert(array $data){
		$data= $this->passwordHash($data);
		return $data;
	}
	
	protected function beforeUpdate(array $data){
		$data= $this->passwordHash($data);
		return $data;
	}
	
	protected function passwordHash(array $data)
	{
		if(isset($data['data']['password']))
		$data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
		return $data;
	}
	public function verifyUserName($user_name)
	{
		
		$builder = $this->db->table('client');
		$builder -> select("client_id,user_name,password,is_active,agency");
		$builder -> where('user_name',$user_name);
		$result = $builder->get();
		if(count($result->getResultArray()) ==1)
		{
			return $result->getRowArray();
		}else{
			return false;
		}
	}

  
}
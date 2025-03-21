<?php namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table      = 'staff';
    protected $primaryKey = 'staff_id';
	
	protected $allowedFields = ['branch_id' , 'role' , 'name',  'user_name', 'password' , 'is_active' ,'created_by','updated_by'];
	
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
		
		$builder = $this->db->table('staff');
		$builder -> select("staff_id,branch_id,name,user_name,password,is_active,role");
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
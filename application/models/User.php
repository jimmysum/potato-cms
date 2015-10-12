<?php

class User extends CI_Model 
{
	
	const TABLE = 'admin';
	
	public $id;
	
	public $username;
	
	public $password;
	
	public $sign;
	
	public function __construct()
	{
		parent::__construct();
// 		$this->load->database();
	}
	
	public function getUserInfo($username)
	{
		$this->username = $username;
		$sql = "select count(*) from ci_user where username=" . $this->db->escape($this->username);
		$sql = $this->db->from(self::TABLE)->select();
// 		$query = $this->db->query($sql);
// 		$query = $this->db->get_where(self::TABLE, array('username' => $username));
		$query = $this->db->get();
		return $query->result_array();
		return $this->db->error();
	}
	
	public function getUserById($id)
	{
		return $this->db->where(array('id' => $id))->from(self::TABLE)->get()->row_array();
	}
	
	public function getUserByName($username)
	{
		return $this->db->where(array('username' => $username))->from(self::TABLE)->get()->row_array();
	}
	
	public function validPassword($username, $password)
	{
		$info = $this->getUserByName($username);
// 		$this->db->update(self::TABLE, array('password' => md5($info['password'])), array('id' => $info['id']));
		if (md5($password) == $info['password'])
		{
			return $info;
		}
		else 
		{
			return false;
		}
	}
	
	public function getVersion()
	{
		$version = $this->db->query('select  VERSION()');
		$version = $version->result_array();
		return current(current($version));
	}
}

?>
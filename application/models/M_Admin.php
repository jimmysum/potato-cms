<?php

class M_Admin extends CI_Model 
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

	public function conditon($conditon)
	{
		if (isset($conditon['id_in']) && $conditon['id_in']) 
		{
			$this->db->where_in('id', $conditon['id_in']);
		}

		if (isset($conditon['id']) && $conditon['id'] > 0) 
		{
			$this->db->where(array('id' => $conditon['id']));
		}

		if (isset($conditon['username']) && $conditon['username']) 
		{
			$this->db->where(array('username' => $conditon['username']));
		}

	}

	public function getAll()
	{
		$res = $this->db->from(self::TABLE)->get()->result_array();
		if ($res) {
			$temp = array();
			foreach ($res as $k => $v) {
				$temp[$v['id']] = $v;
			}
			return $temp;
		}
		return array();
	}

	public function getCount($conditon)
	{
		$this->conditon($conditon);
		$this->db->from(self::TABLE);
		return $this->db->count_all_results();
	}


	public function getList($conditon)
	{
		$this->conditon($conditon);

		$res = $this->db->from(self::TABLE)->get()->result_array();
		if ($res) {
			$temp = array();
			foreach ($res as $k => $v) {
				$temp[$v['id']] = $v;
			}
			return $temp;
		}
		return array();
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
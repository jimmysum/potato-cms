<?php
/**
*
* @Copyright (C), 2014  Jimmy
* @Name  Cate.php
* @Author  Jimmy
* @Version  1.0
* @Date:  2015-10-9下午4:47:49
* @Description 
* @Class List
*      1.
*  @Function List
*   1.
*  @History
*      <author>    <time>                     <version >                  <desc>
*        Jimmy        2015-10-9下午4:47:49          1.0                     第一次建立该文件
*
*/

class M_Article extends CI_Model 
{
	const TABLE = 'article';
	
	public function __construct() 
	{
		parent::__construct ();
	}
	
	public function getAll()
	{
		$list = $this->db->from(self::TABLE)->select()->get()->result_array();
		return $list;
	}

	public function getList($conditon)
	{
		if (isset($conditon['p']) && !$conditon['ps']) {
			
		}
		$list = $this->db->from(self::TABLE)->select()->get()->result_array();
		return $list;
	}

	public function getOne($id)
	{
		return $this->db->from(self::TABLE)->where(array('id' => $id))->select()->get()->row_array();
	}

	public function add($cate)
	{
		return $this->db->insert(self::TABLE, $cate);
	}

	public function update($cate, $key)
	{
		$val = $cate[$key];
		if (!$val)
		{
			return 0;
		}
		unset($cate[$key]);
		return $this->db->update(self::TABLE, $cate, array($key => $val));
	}

	public function del($id)
	{
		return $this->db->delete(self::TABLE, array('id' => $id));
	}
}

?>
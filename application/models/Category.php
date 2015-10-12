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

class Category extends CI_Model 
{
	const TABLE = 'cate';
	
	public function __construct() 
	{
		parent::__construct ();
	}
	
	public function getAll()
	{
		$list = $this->db->from(self::TABLE)->select()->get()->result_array();
		return $list;
	}
}

?>
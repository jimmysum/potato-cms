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

		if (isset($conditon['del'])) 
		{
			$this->db->where(array('del' => $conditon['del']));
		}

		if (isset($conditon['username']) && $conditon['username']) 
		{
			$this->db->where(array('username' => $conditon['username']));
		}

		if (isset($conditon['p'])) {
			$ps = $conditon['ps'] ? $conditon['ps'] : 25;
			$this->db->limit($ps, $conditon['p']);
		}

	}

	public function amerge($list)
	{
		if (!$list) {
			return array();
		}
		foreach ($list as $k => $v) {
			$list[$k]['recommend_str'] = $v['recommend'] == 1 ? '推荐' : '未推荐';
			$list[$k]['top_str'] = $v['top'] == 1 ? '置顶' : '未置顶';
			$list[$k]['hot_str'] = $v['hot'] == 1 ? '热门' : '非热门';
			$list[$k]['audit_str'] = $v['audit'] == 0 ? '待审核' : ($v['audit'] == 1 ? '通过' : '不通过');
		}
		return $list;
	}
	
	public function getAll()
	{
		$this->db->from(self::TABLE);
		$list = $this->db->get()->result_array();
		return $list;
	}

	public function getList($conditon)
	{
		$this->conditon($conditon);
		$this->db->from(self::TABLE);
		return $this->db->get()->result_array();
	}

	public function getCount($conditon)
	{
		$this->conditon($conditon);
		$this->db->from(self::TABLE);
		return $this->db->count_all_results();
	}

	public function getOne($id)
	{
		return $this->db->from(self::TABLE)->where(array('id' => $id))->select()->get()->row_array();
	}

	public function add($data)
	{
		return $this->db->insert(self::TABLE, $data);
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
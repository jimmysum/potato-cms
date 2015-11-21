<?php

/**
*
* @Copyright (C), 2014  Jimmy
* @Name  Cate.php
* @Author  Jimmy
* @Version  1.0
* @Date:  2015-10-9下午4:12:48
* @Description 
* @Class List
*      1.
*  @Function List
*   1.
*  @History
*      <author>    <time>                     <version >                  <desc>
*        Jimmy        2015-10-9下午4:12:48          1.0                     第一次建立该文件
*
*/
class Article extends Admin_Controller 
{
	/**
	 * 规则验证
	 *
	 * @var array
	 */
	public $rules = array(
			array(
					'field' => 'cate_id',
					'label' => '分类',
					'rules' => 'required|greater_than_equal_to[1]',
					'errors' => array(
							'required' => '请选择"%s."',
							'greater_than_equal_to' => '请选择"%s."',
					),
			),
			array(
					'field' => 'title',
					'label' => '文章标题',
					'rules' => 'required',
					'errors' => array(
							'required' => '请填写"%s."',
					),
			),
			array(
					'field' => 'content',
					'label' => '正文内容',
					'rules' => 'required|min_length[30]',
					'errors' => array(
							'required' => '请填写"%s."',
							'min_length' => '"%s"不能少于30字',
					),
			),
			
	);

	public $ps = 11;
	
	public function __construct() 
	{
		parent::__construct ();
		$this->load->model('M_Article', 'article');
		$this->load->model('M_Cate', 'category');
	}
	
	public function index()
	{
		$param = $this->input->get();
		if (isset($param['recycle']))
		{
			$conditon['del'] = 1;
			$this->assign('del', 1);
		}
		else
		{
			$conditon['del'] = 0;
			$this->assign('del', 0);
		}
		if (isset($param['title']) && $param['title'] != '') {
			$conditon['title'] = $param['title'];
		}
		if (isset($param['cate_id']) && $param['cate_id'] > 0) {
			$conditon['cate_id'] = $param['cate_id'];
		}
		
		$count = $this->article->getCount($conditon);

		$conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
		$conditon['ps'] = $this->ps;
		$list = $this->article->getList($conditon);
		$uid = array();
		foreach ($list as $k => $v) {
			$uid[] = $v['userid'];
		}


		$cateList = $this->category->getAll();
		
		$this->load->model('M_Admin', 'admin');
		$uid = array_unique($uid);
		$userList = $this->admin->getList(array('id_in' => $uid));

		foreach ($list as $k => $v) {
			$list[$k]['cate'] = '';
			if (isset($cateList[$v['cate_id']])) {
				$list[$k]['cate'] = $cateList[$v['cate_id']]['cate'];
			}
			$list[$k]['username'] = $userList[$v['userid']]['username'];
		}
		$list = $this->article->amerge($list);

		$cateList = node_merge($cateList);

		// 分页
		$this->load->library('pagination');
		unset($param['p'], $param['ps']);
		// print_r($count);
		$config['base_url'] = '/admin/article/index?' . http_build_query($param);
		$config['total_rows'] = $count;
		$config['per_page'] = $this->ps;
		$config['page_query_string'] = true;
		$this->pagination->initialize($config);

		$this->assign('page', $this->pagination->create_links());
		// echo '<pre>';
		// print_r($userList);
		$this->assign('list', $list);
		$this->assign('cateList', $cateList);
		$this->display();
	}

	
	public function add()
	{
		$input = $this->input->post();
		if ($input)
		{
			// print_r($input);die;
			$this->load->library('form_validation');
			$this->form_validation->set_data($input);
			$this->form_validation->set_rules($this->rules);
			if ($this->form_validation->run() == TRUE)
			{
				$input['time'] = time();
				$user = $this->session->userdata('user');
				$input['userid'] = $user['id'];
				if (isset($input['id'])) {
					$res = $this->article->update($input, 'id');
				}
				else
				{
					$res = $this->article->add($input);
				}
				if ($res)
				{
					$this->outJson(0);
				}
				else
				{
					$this->outJson(1);
				}
			}
			else
			{
				$this->outJson(101, '', current($this->form_validation->error_array()));
			}
		}
		else 
		{
			$id = $this->input->get('id');
			$article = array();
			if ($id) {
				$article = $this->article->getOne($id);
				if (!$article) {
					$this->error('文章不存在');
				}
				$this->load->model('M_Admin', 'user');
				$user = $this->user->getUserById($article['userid']);
				$article['username'] = $user['username'];
			}
			$this->assign('article', $article);
			$list = $this->category->getAll();
			$list = node_merge($list);
			$this->assign('list', $list);
			$this->display();
		}
	}

	public function del()
	{
		$id = $this->input->get('id');
		if (!$id) {
			$this->outJson(-1);
		}

		$idArr = explode(',', $id);
		$conditon = array('id_in' => $idArr);
		$list = $this->article->getList($conditon);
		if (!$list) {
			$this->outJson(101,'','分类不存在');
		}
		
		foreach ($list as $key => $v) {
			$res = $this->article->del($v['id']);
		}
		
		
		$this->outJson(0);
	}

	public function notDelete()
	{
		$id = $this->input->get('id');
		$recover = $this->input->get('recover');
		
		$idArr = explode(',', $id);
		foreach($idArr as $k => $v)
		{
			if (!$v) {
			 	unset($idArr[$k]);
			 }
		}
		if (empty($idArr)) {
			$this->outJson(-1, '', '请选择文章');
		}
		$conditon = array('id_in' => $idArr);
		$list = $this->article->getList($conditon);
		if (!$list) {
			$this->outJson(101,'','分类不存在');
		}
		
		foreach ($list as $key => $v) {
			$input = array();
			$input['id'] = $v['id'];
			$input['del'] = $recover == 1 ? 0 : 1;
			$res = $this->article->update($input, 'id');
		}
		
		$this->outJson(0);
	}

	public function check()
	{
		$id = $this->input->get('id');
		$type = $this->input->get('type');
		if (!$id || !$type) {
			$this->outJson(-1);
		}

		$idArr = explode(',', $id);
		$conditon = array('id_in' => $idArr);
		$list = $this->article->getList($conditon);
		if (!$list) {
			$this->outJson(101,'','分类不存在');
		}

		$str = '';
		switch ($type) {
			case '1':
				$str = 'audit';
				break;
			case '2':
				$str = 'recommend';
				break;
			case '3':
				$str = 'top';
				break;
			case '4':
				$str = 'hot';
				break;
			
			default:
				$this->outJson(-1);
				break;
		}
		
		foreach ($list as $key => $v) {
			$input = array();
			$input['id'] = $v['id'];
			$input[$str] = 1;
			$res = $this->article->update($input, 'id');
		}
		
		$this->outJson(0);
	}
}

?>
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
					'field' => 'cate',
					'label' => '分类名称',
					'rules' => 'required',
					'errors' => array(
							'required' => '请填写"%s."',
					),
			),
			
	);

	public $ps = 25;
	
	public function __construct() 
	{
		parent::__construct ();
		$this->load->model('M_Article', 'article');
		$this->load->model('M_Cate', 'category');
	}
	
	public function index()
	{
		$param = $this->input->get();
		$conditon['del'] = 0;
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
			$list[$k]['cate'] = $cateList[$v['cate_id']]['cate'];
			$list[$k]['username'] = $userList[$v['userid']]['username'];
		}
		$list = $this->article->amerge($list);

		$cateList = node_merge($cateList);

		// 分页
		$this->load->library('pagination');
		$config['base_url'] = '/admin/article/index';
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
			print_r($input);die;
			$this->load->library('form_validation');
			$this->form_validation->set_data($input);
			$this->form_validation->set_rules($this->rules);
			if ($this->form_validation->run() == TRUE)
			{
				$input['time'] = time();
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
			$cate = array();
			if ($id) {
				$cate = $this->article->getOne($id);
				if (!$cate) {
					$this->error('分类不存在');
				}
			}
			$this->assign('cate', $cate);
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

		$cate = $this->article->getOne($id);
		if (!$cate) {
			$this->outJson(101,'','分类不存在');
		}
		
		$res = $this->article->del($id);
		if ($res) {
			$this->outJson(0);
		}
		else
		{
			$this->outJson(1);
		}

	}
}

?>
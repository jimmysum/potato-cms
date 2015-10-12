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
class Cate extends Admin_Controller 
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
							'required' => '请填写  %s.',
					),
			),
			
	);
	
	public function __construct() 
	{
		parent::__construct ();
		$this->load->model('category');
	}
	
	public function index()
	{
		$list = $this->category->getAll();
		$list = node_merge($list);
// 		echo '<pre>';
// 		print_r($list);
		$this->assign('list', $list);
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
				
			}
			else
			{
				$this->outJson(101, '', current($this->form_validation->error_array()));
			}
		}
		else 
		{
			$list = $this->category->getAll();
			$list = node_merge($list);
			$this->assign('list', $list);
			$this->display();
		}
	}
}

?>
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
class Node extends Admin_Controller 
{
    /**
     * 规则验证
     *
     * @var array
     */
    public $rules = array(
            array(
                    'field' => 'name',
                    'label' => 'ActionName',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
    );

    public $ps = 20;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->model('M_node', 'node');
        $this->load->model('M_Role', 'role');
    }
    
    public function index()
    {
        $list = $this->node->getAll();
        $list = node_merge($list);
        
     
     // echo '<pre>';
     // print_r($list);die;
        $this->assign('list', $list);
        $this->display();
    }
    
    public function add()
    {
        $input = $this->input->post();
        if ($input)
        {
            $this->load->library('form_validation');
            $this->form_validation->set_data($input);
            $this->form_validation->set_rules($this->rules);
            if ($this->form_validation->run() == TRUE)
            {
                $input['time'] = time();
                if (isset($input['id'])) {
                    $res = $this->node->update($input, 'id');
                }
                else
                {
                    $res = $this->node->add($input);
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
            $data = array();
            if ($id) {
                $data = $this->node->getOne($id);
                if (!$data) {
                    $this->error('节点不存在');
                }
            }
            // echo '<pre>';print_r($data);die;
            $list = $this->node->getAll();
            $list = node_merge($list);
        
            $this->assign('list', $list);
            $this->assign('data', $data);
            $this->display();
        }
    }

    public function del()
    {
        $id = $this->input->get('id');
        if (!$id) {
            $this->outJson(-1);
        }

        $cate = $this->node->getOne($id);
        if (!$cate) {
            $this->outJson(101,'','参数错误');
        }

        $res = $this->node->del($id);
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
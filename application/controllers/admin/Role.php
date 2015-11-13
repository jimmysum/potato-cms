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
class Role extends Admin_Controller 
{
    /**
     * 规则验证
     *
     * @var array
     */
    public $rules = array(
            array(
                    'field' => 'name',
                    'label' => '角色名',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
            array(
                    'field' => 'remark',
                    'label' => '角色描述',
                    'rules' => 'trim|required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
    );

    public $ps = 20;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->model('M_Admin', 'admin');
        $this->load->model('M_Role', 'role');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $list = $this->role->getAll();
        $list = $this->role->amerge($list);
        
     
     // echo '<pre>';
     // print_r($list);
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
                    $res = $this->role->update($input, 'id');
                }
                else
                {
                    $res = $this->role->add($input);
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
                $data = $this->role->getOne($id);
                if (!$data) {
                    $this->error('角色不存在');
                }
            }

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

        $cate = $this->role->getOne($id);
        if (!$cate) {
            $this->outJson(101,'','参数错误');
        }

        if ($cate['name'] == 'Super')
        {
            $this->outJson(101,'','超级角色不可删除');
        }

        $res = $this->role->del($id);
        if ($res) {
            $this->outJson(0);
        }
        else
        {
            $this->outJson(1);
        }

    }

    public function distribute()
    {
        $id = $this->input->get('id');
        if (!$id) {
            $this->outJson(-1);
        }

        $data = $this->role->getOne($id);
        if (!$data) {
            $this->outJson(101,'','参数错误');
        }

        $this->load->model('M_Access', 'access');
        $access = $this->access->getList(array('role_id' => $id));
        $auth = array();
        foreach($access as $k => $v)
        {
            $auth[] = $v['node_id'];
        }

        $this->load->model('M_node', 'node');
        $list = $this->node->getAll();
        $list = node_merge($list);
        
        $this->assign('auth', $auth);
        $this->assign('list', $list);
        $this->assign('data', $data);
        $this->display();
    }
}

?>
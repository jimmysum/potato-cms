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
class User extends Admin_Controller 
{
    /**
     * 规则验证
     *
     * @var array
     */
    public $rules = array(
            array(
                    'field' => 'role_id',
                    'label' => '权限组',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请选择"%s."',
                    ),
            ),
            array(
                    'field' => 'username',
                    'label' => '用户名',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
            array(
                    'field' => 'password',
                    'label' => '密码',
                    'rules' => 'trim|required|min_length[6]',
                    'errors' => array(
                            'required' => '请填写"%s."',
                            'min_length' => '"%s."必须6位以上',
                    ),
            ),
            array(
                    'field' => 'repassword',
                    'label' => '重复密码',
                    'rules' => 'trim|required|matches[password]',
                    'errors' => array(
                            'required' => '请填写"%s."',
                            'matches'   => '两次密码不相同',
                    ),
            ),
    );

    public $ps = 20;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->model('M_user', 'user');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
        $conditon['ps'] = $this->ps;
        $list = $this->user->getList($conditon);
        $list = $this->user->amerge($list);
     
        $count = $this->user->getCount(array());
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = '/admin/user/index';
        $config['total_rows'] = $count;
        $config['per_page'] = $this->ps;
        $config['page_query_string'] = true;
        $this->pagination->initialize($config);

        $this->assign('page', $this->pagination->create_links());
//      echo '<pre>';
//      print_r($list);
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
                unset($input['repassword']);
                $input['password'] = md5($input['password']);
                $input['time'] = time();
                if (isset($input['id'])) {
                    $res = $this->user->update($input, 'id');
                }
                else
                {
                    $res = $this->user->add($input);
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
                $data = $this->user->getUserById($id);
                if (!$data) {
                    $this->error('用户不存在');
                }
            }

            $this->load->model('M_Role', 'role');
            $list = $this->role->getAll();
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

        $cate = $this->user->getUserById($id);
        if (!$cate) {
            $this->outJson(101,'','参数错误');
        }

        $res = $this->user->del($id);
        if ($res) {
            $this->outJson(0);
        }
        else
        {
            $this->outJson(1);
        }

    }

    public function enable()
    {
        $id = $this->input->get('id');
        if (!$id) {
            $this->outJson(-1);
        }

        // echo '<pre>';print_r($id);die;
        $ids = explode(',', $id);


        $status = (int)$this->input->get('status');
        $status = $status >= 1 ? 1 : 0;

        $user = $this->user->getList(array('id_in' => $ids));
        if (!$user) {
            $this->outJson(101,'','参数错误');
        }

        $res = 0;
        foreach ($user as $v) {
            $data = array(
                    'user_status' => $status,
                    'id'            => $v['id'],
                );
            
            $res = $this->user->update($data, 'id');
        }
        
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
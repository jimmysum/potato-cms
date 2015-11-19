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
class Admin extends Admin_Controller 
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
        $this->load->model('M_Admin', 'admin');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
        $conditon['ps'] = $this->ps;
        $list = $this->admin->getList($conditon);
        $list = $this->admin->amerge($list);
     
        $count = $this->admin->getCount(array());
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = '/admin/admin/index';
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
                    $res = $this->admin->update($input, 'id');
                }
                else
                {
                    $res = $this->admin->add($input);
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
                $data = $this->admin->getUserById($id);
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

        $cate = $this->admin->getUserById($id);
        if (!$cate) {
            $this->outJson(101,'','参数错误');
        }

        if ($cate['username'] == 'admin')
        {
            $this->outJson(101,'','超级用户不可删除');
        }

        $res = $this->admin->del($id);
        if ($res) {
            $this->outJson(0);
        }
        else
        {
            $this->outJson(1);
        }

    }

    public function myinfo()
    {
        $info = $this->session->userdata('user');
        $info = $this->admin->getOne($info['info']['id']);
        // echo "<pre>";print_r($info);
        $this->assign('data', $info);
        $this->display();
    }

    public function changeName()
    {
        $nickname = $this->input->post('nickname');
        if (!$nickname) {
            $this->outJson(-1);
        }

        $info = $this->session->userdata('user');
        $data = array('nickname' => $nickname, 'id' => $info['info']['id']);
        $res = $this->admin->update($data, 'id');
        if ($res) {
            $this->outJson(0);
        }
        else
        {
            $this->outJson(1);
        }
    }


    public function changePwd()
    {
        $post = $this->input->post();
        if ($post) {
            $rules = array(
                    array(
                            'field' => 'password',
                            'label' => '原始密码',
                            'rules' => 'required',
                            'errors' => array(
                                    'required' => '请填写"%s."',
                            ),
                    ),
                    array(
                            'field' => 'newpassword',
                            'label' => '新密码',
                            'rules' => 'trim|required|min_length[6]',
                            'errors' => array(
                                    'required' => '请填写"%s."',
                                    'min_length' => '"%s."必须6位以上',
                            ),
                    ),
                    array(
                            'field' => 'repassword',
                            'label' => '重复新密码',
                            'rules' => 'trim|required|matches[newpassword]',
                            'errors' => array(
                                    'required' => '请填写"%s."',
                                    'matches'   => '两次密码不相同',
                            ),
                    ),
            );
            
            $this->load->library('form_validation');
            $this->form_validation->set_data($post);
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == TRUE)
            {
                $info = $this->session->userdata('user');
                $info = $this->admin->getOne($info['info']['id']);
                if ($info['password'] !== md5($post['password'])) {
                    $this->outJson(1, '', '原始密码错误！');
                }

                $input['password'] = md5($post['newpassword']);
                $input['time'] = time();
                $input['id'] = $info['id'];
                $res = $this->admin->update($input, 'id');
                
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

        $this->outJson(-1);
    }

}

?>
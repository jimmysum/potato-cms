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
class Back extends Admin_Controller 
{
    

    public $ps = 20;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->dbutil();
    }
    
    public function index()
    {
        // $dbs = $this->dbutil->list_databases();
        $tables = $this->db->list_tables();
        $temp = array();
        $i = 0;
        foreach ($tables as $k => $v) {
            $i = $k / 5;
            $temp[$i][$k] = $v;
        }
        // echo '<pre>';print_r($temp);exit;
        $this->assign('list', $temp);
        $this->display();
    }

    public function backup()
    {
        // 备份整个数据库并将其赋值给一个变量
        $backup =& $this->dbutil->backup(); 
         
        // 加载文件辅助函数并将文件写入你的服务器
        $this->load->helper('file');
        write_file('/path/to/mybackup.gz', $backup); 
         
        // 加载下载辅助函数并将文件发送到你的桌面
        //$this->load->helper('download');
        //force_download('mybackup.gz', $backup); 
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
}

?>
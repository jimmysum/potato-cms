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
class Restore extends Admin_Controller 
{
    

    public $ps = 20;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->helper('file');
    }
    
    public function index()
    {
        $path = './public/backdata/';
        $list = get_dir_file_info($path);
        // echo '<pre>';print_r($list);die;
        // $dbs = $this->dbutil->list_databases();
        // $tables = $this->db->list_tables();
        
        $this->assign('list', $list);
        $this->display();
    }

    public function backup()
    {
        $post = $this->input->post();
        if (!$post) {
            return $this->outJson(101, '', '请选择需要备份的表！');
        }
        // echo '<pre>';print_r($post['tables']);die;

        $name = date('Y-m-d-H-i-s', time());
        // 备份整个数据库并将其赋值给一个变量
        $prefs = array(
            'tables'    => $post['tables'],   // Array of tables to backup.
            'ignore'    => array(),         // List of tables to omit from the backup
            'format'    => 'gzip',           // gzip, zip, txt
            'filename'  => $name . '.sql',      // File name - NEEDED ONLY WITH ZIP FILES
            'add_drop'  => TRUE,            // Whether to add DROP TABLE statements to backup file
            'add_insert'    => TRUE,            // Whether to add INSERT data to backup file
            'newline'   => "\n"             // Newline character used in backup file
        );
        $backup = $this->dbutil->backup($prefs);

        // 加载文件辅助函数并将文件写入你的服务器
        $this->load->helper('file');

        $path = './public/backdata/back' . $name . '.gz';
        $res = write_file($path, $backup); 
        // 加载下载辅助函数并将文件发送到你的桌面
        // $this->load->helper('download');
        // force_download('mybackup.gz', $backup); 
        if ($res == 1) {
            return $this->outJson(0);
        }
        else 
        {
            return $this->outJson(1);
        }
    }

    /**
     * 优化数据库
     * @return [type] [description]
     */
    public function optimize_database()
    {
        $result = $this->dbutil->optimize_database();
        
        if ($result !== false) {
            return $this->outJson(0);
        }
        else 
        {
            return $this->outJson(1);
        }
    }
    
    /**
     * 
     * @return [type] [description]
     */
    public function optimize_tables()
    {
        $post = $this->input->post();
        if (!$post) {
            return $this->outJson(101, '', '请选择需要优化的表！');
        }

        $resArr = array();
        foreach ($post['tables'] as $key => $value) {
            $result = $this->dbutil->optimize_table($value);
            if ($result == false) {
                $resArr[$value] = $value;
            }
        }
        
        if (!$resArr) {
            return $this->outJson(0);
        }
        else 
        {
            $out = implode(',', $resArr);
            return $this->outJson(1, '', $out . '-未优化成功！');
        }
    }
    
    /**
     * 
     * @return [type] [description]
     */
    public function repair_tables()
    {
        $post = $this->input->post();
        if (!$post) {
            return $this->outJson(101, '', '请选择需要修复的表！');
        }

        $resArr = array();
        foreach ($post['tables'] as $key => $value) {
            $result = $this->dbutil->repair_table($value);
            if ($result == false) {
                $resArr[$value] = $value;
            }
        }
        
        if (!$resArr) {
            return $this->outJson(0);
        }
        else 
        {
            $out = implode(',', $resArr);
            return $this->outJson(1, '', $out . '-未修复成功！');
        }
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
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
    

    public $path = './public/backdata/';
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->helper('file');
    }
    
    public function index()
    {
        $list = get_dir_file_info($this->path);
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

    public function del()
    {
        $filename = $this->input->get('filename');
        if (!$filename) {
            $filename = $this->input->post('filename');
            if (!$filename)
            {
                $this->outJson(-1);
            }
        }

        if (is_string($filename))
        {
            $filename = array($filename);
        }

        $noauth = array();
        foreach ($filename as $k => $v) {
            $file = get_file_info($this->path . $v);
            if ($file) {
                $auth = octal_permissions(fileperms($this->path . $v));
                $number = substr($auth, -1);
                if ($number != 7) {
                    $noauth[] = $v;
                }
                else
                {
                    if (is_file($file['server_path'])) {
                        unlink($file['server_path']);
                    }
                    if (is_dir($file['server_path'])) {
                        rmdir($file['server_path']);
                    }
                }
            }
        }

        if (!$noauth) {
            $this->outJson(0);
        }
        else
        {
            $this->outJson(1, '', implode(',', $noauth) . '没有权限删除！');
        }

    }
}

?>
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
class Comment extends Admin_Controller 
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
        $this->load->model('M_Comment', 'comment');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $count = $this->comment->getCount(array());

        $conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
        $conditon['ps'] = $this->ps;
        $list = $this->comment->getList($conditon);
     // echo '<pre>';
     // print_r($list);
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = '/admin/comment/index';
        $config['total_rows'] = $count;
        $config['per_page'] = $this->ps;
        $config['page_query_string'] = true;
        $this->pagination->initialize($config);

        $this->assign('page', $this->pagination->create_links());
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
                    $res = $this->comment->update($input, 'id');
                }
                else
                {
                    $res = $this->comment->add($input);
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
                $cate = $this->comment->getOne($id);
                if (!$cate) {
                    $this->error('分类不存在');
                }
            }
            $this->assign('cate', $cate);
            $list = $this->comment->getAll();
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
        $list = $this->comment->getList($conditon);
        if (!$list) {
            $this->outJson(101,'','分类不存在');
        }
        
        foreach ($list as $key => $v) {
            $res = $this->comment->del($v['id']);
        }
        
        
        $this->outJson(0);
    }
}

?>
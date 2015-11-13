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
class Link extends Admin_Controller 
{
    /**
     * 规则验证
     *
     * @var array
     */
    public $rules = array(
            array(
                    'field' => 'name',
                    'label' => '公司名称',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
            array(
                    'field' => 'url',
                    'label' => '公司链接',
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
        $this->load->model('M_Link', 'link');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
        $conditon['ps'] = $this->ps;
        $list = $this->link->getList($conditon);
//      echo '<pre>';
//      print_r($list);
     
        $count = $this->link->getCount(array());
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = '/admin/link/index';
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
                $input['sort'] <= 0 and $input['sort'] = 50;
                if (isset($input['id'])) {
                    $res = $this->link->update($input, 'id');
                }
                else
                {
                    $res = $this->link->add($input);
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
                $cate = $this->link->getOne($id);
                if (!$cate) {
                    $this->error('友情链接不存在');
                }
            }
            $this->assign('cate', $cate);
            $this->display();
        }
    }

    public function del()
    {
        $id = $this->input->get('id');
        if (!$id) {
            $this->outJson(-1);
        }

        $data = $this->link->getOne($id);
        if (!$data) {
            $this->outJson(101,'','分类不存在');
        }

        $res = $this->link->del($id);
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
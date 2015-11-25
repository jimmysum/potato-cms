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
class Ad extends Admin_Controller 
{
    /**
     * 规则验证
     *
     * @var array
     */
    public $rules = array(
            array(
                    'field' => 'ad_name',
                    'label' => '广告名称',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请填写"%s."',
                    ),
            ),
            array(
                    'field' => 'pos_id',
                    'label' => '广告位',
                    'rules' => 'required|greater_than_equal_to[1]',
                    'errors' => array(
                            'required' => '请选择"%s."',
                            'greater_than_equal_to' => '请选择"%s."',
                    ),
            ),
            array(
                    'field' => 'ad_content',
                    'label' => '广告正文',
                    'rules' => 'required',
                    'errors' => array(
                            'required' => '请选择"%s."',
                    ),
            ),
    );
    
    public $ps = 25;
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->model('M_Ad', 'ad');
        $this->load->model('M_Adpos', 'adpos');
    }
    
    public function index()
    {
        $param = $this->input->get();
        $conditon = array();
        $count = $this->ad->getCount($conditon);
        $conditon['p'] = isset($param['p']) && $param['p'] > 0 ? $param['p'] : 0;
        $conditon['ps'] = $this->ps;
        $list = $this->ad->getList($conditon);
        $poslist = $this->adpos->getAll();
        foreach ($list as $key => $value) {
            $list[$key]['pos_name'] = isset($poslist[$value['pos_id']]) ? $poslist[$value['pos_id']]['name'] : '不存在';
        }
        // 分页
        $this->load->library('pagination');
        $config['base_url'] = '/admin/article/index';
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
                if (isset($input['ad_id'])) {
                    $res = $this->ad->update($input, 'ad_id');
                }
                else
                {
                    $res = $this->ad->add($input);
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
                $data = $this->ad->getOne($id);
                if (!$data) {
                    $this->error('广告不存在');
                }
            }
            $list = $this->adpos->getAll();
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

        $cate = $this->ad->getOne($id);
        if (!$cate) {
            $this->outJson(101,'','广告不存在');
        }

        $res = $this->ad->del($id);
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
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
class Cate extends Admin_Controller 
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
    
    public function __construct() 
    {
        parent::__construct ();
        $this->load->model('M_Ad', 'ad');
    }
    
    public function index()
    {
        $list = $this->ad->getAll();
        $list = node_merge($list);
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
                $input['time'] = time();
                if (isset($input['id'])) {
                    $res = $this->ad->update($input, 'id');
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
            $cate = array();
            if ($id) {
                $cate = $this->ad->getOne($id);
                if (!$cate) {
                    $this->error('分类不存在');
                }
            }
            $this->assign('cate', $cate);
            $list = $this->ad->getAll();
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

        $cate = $this->ad->getOne($id);
        if (!$cate) {
            $this->outJson(101,'','分类不存在');
        }

        $this->load->model('M_Article', 'article');
        $conditon = array('cate_id' => $id);
        $articles = $this->article->getList($conditon);
        if($articles)
        {
            $this->outJson(101,'','此分类下存在文章，不可删除');
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
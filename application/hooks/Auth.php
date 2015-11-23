<?php
class Auth
{
    public function checkAuth()
    {
        $ci = &get_instance(); 
        $module = strtolower($ci->uri->segment(1));
        if ($module == 'admin') 
        {
            // 判断已登录
            $user = $ci->session->userdata('user');

            // 登录方法做是否已登录判断
            $action = strtolower($ci->uri->segment(3));
            $controller = strtolower($ci->uri->segment(2));
            if ($user && $action == 'login')
            {
                redirect('/admin/main/index');
            }
            else if (!$user && $action != 'login')
            {
                redirect('/admin/login/login');
            }

            $noauth = $ci->config->item('noauth_controller');
            $ci->load->model('M_node', 'node');
            $list = $ci->node->getList(array('ASC' => 'sort', 'id_in' => $user['node']));
            $open = 0;
            $actId = 0;
            $nav = array('首页', '网站信息');
            foreach($list as $k => $v)
            {
                $con = explode('/', $v['name']);
                $num = count($con);
                if (strtolower($con[0]) == $controller && $num > 1) {
                    $open = $v['pid'];
                    $nav = array($list[$v['pid']]['title'], $v['title']);
                    foreach($list as $val)
                    {
                        if ($val['pid'] == $v['id'] && $action == strtolower($val['name'])) {
                            $actId = $val['id']; 
                            break;
                        }
                    }
                    break;
                }
            }
            
            $list = node_merge($list);
            $ci->assign('leftnav', $list);
            $ci->assign('open', $open);
            if (!in_array(ucwords($controller), $noauth)) {
                if ($open <= 0 || $actId <= 0) {
                    $json = $ci->input->get('json');
                    if (isset($json) && $json == 1) {
                        $ci->outJson(101, '', '对不起，您没有权限操作此项！');
                    }
                    $ci->error('对不起，您没有权限操作此项！', 2);
                }
            }
            
            $ci->assign('nav', $nav);
            
        }
        // show_error('您无权访问该功能，该错误已经被记录！点击<a href="'. site_url('admin/main/index') .'">返回</a>');
    }

}
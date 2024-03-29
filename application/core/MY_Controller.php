<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 前台控制器基类，继承框架控制器
 */
class MY_Controller extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->assign('picker_style_url', base_url() . 'style/picker/');
	}
	
	/**
	* @desc 视图渲染
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:39:54 
	* @param
	* @return
	*/
	public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
	{
		if (!$template)
		{
			$uri = $this->uri->segment_array();
			$template = $uri[1] . '/' . strtolower($uri[2]) . '/' . strtolower($uri[3]) . '.html';
		}
		$this->ci_smarty->display($template, $cache_id, $compile_id, $parent);
	}
	
	/**
	* @desc 变量赋值
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:40:14 
	* @param
	* @return
	*/
	public function assign($tpl_var, $value = null, $nocache = false)
	{
		$this->ci_smarty->assign($tpl_var, $value, $nocache);
	}
	
	/**
	* @desc 视图拼接
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:40:30 
	* @param
	* @return
	*/
	public function append($tpl_var, $value = null, $merge = false, $nocache = false)
	{
		$this->ci_smarty->append($tpl_var, $value, $merge, $nocache);
	}
	
	/**
	* @desc 获取结果集
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:40:52 
	* @param
	* @return
	*/
	public function fetch($template = null, $cache_id = null, $compile_id = null, $parent = null, $display = false,
			$merge_tpl_vars = true, $no_output_filter = false)
	{
		$this->ci_smarty->fetch($template, $cache_id, $compile_id, $parent, $display,
			$merge_tpl_vars, $no_output_filter);
	}
	
	/**
	* @desc json输出
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:40:52 
	* @param
	* @return
	*/
	public function outJson($code = 0, $data = array(), $msg = '')
	{
		if (is_null($code))
		{
			$code = -1;
		}
		
		if (!$msg)
		{
			$this->config->load('code', true);
			$codes = $this->config->item('code', 'code');

			if (isset($codes[$code])) {
				$msg = $codes[$code];
			}
		}
		
		$data = array(
				'ret' 	=> $code,
				'msg'	=> $msg,
				'data'	=> $data,
				'timestamp'	=> time(),
		);
		
		header('Content-Type: application/json; charset=utf8'); 
		echo json_encode($data);die;
	}

	
	
}

/**
 * 前端基类
 *
 * @package 
 * @subpackage  
 * @category    
 * @author  Jimmy
 * @link    www.520sports.cn
 */
class Home_Controller extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->assign('home_style_url', base_url() . 'style/home/');
		$this->load->view('home/public/header.html');
	} 

	/**
	* @desc 错误输出
	* @access 
	* @author  Jimmy
	* @date	 2015-9-28下午8:40:52 
	* @param
	* @return
	*/
	public function error($msg)
	{
		echo $msg;die;
	}
}

/**
 * 后端基类
 *
 * @package 
 * @subpackage  
 * @category    
 * @author  Jimmy
 * @link    www.520sports.cn
 */
class Admin_Controller extends MY_Controller
{
	/**
	 * 返回给前端数据
	 *
	 * @var Array
	 */
	public $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->assign('admin_style_url', base_url() . 'style/admin/');
		$this->assign('site_url', site_url());
	}

	public function error($msg, $type = 1, $href = '')
	{
		switch ($type) {
			case '1':
				$msgtype = '404错误';
				break;
			
			case '2':
				$msgtype = '权限错误';
				break;
			
			default:
				$msgtype = '404错误';
				break;
		}

		if(!$href)
		{
			$href = '/admin/main/index';
		}

		$this->assign('href', $href);
		$this->assign('msgtype', $msgtype);
		$this->assign('msg', $msg);
		$this->display('admin/public/404.html');
		die;
	}
}

?>
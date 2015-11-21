<?php
/**
 * @desc
 * @package 
 * @since : 2015-9-25下午2:35:00
 * @final : 2015-9-25下午2:35:00
 */
class Main extends Admin_Controller 
{
	
	public function __construct() 
	{
		parent::__construct ();
	}
	
	/**
	* @desc 
	* @access 
	* @author  Jimmy
	* @date	 2015-9-25下午2:35:37 
	* @param
	* @return
	*/
	public function index()
	{
		$this->load->model('M_article', 'article');
		$data['artCount'] = $this->article->getCount(array());

		$this->load->model('M_comment', 'comment');
		$data['comCount'] = $this->comment->getCount(array());

		$this->load->model('M_user', 'user');
		$data['userCount'] = $this->user->getCount(array());



		$data['ip'] = $this->input->ip_address();
		$data['serverEn'] = $this->input->server('SERVER_SOFTWARE');
		$data['serverVer'] = PHP_VERSION;
		$data['serverInfo'] = php_uname();
		$data['serverLan'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$data['serverIp'] = $this->input->server('SERVER_ADDR');
		$this->load->model('M_Admin', 'admin');
		$data['serverMysql'] = $this->admin->getVersion();

		$this->assign('data', $data);
		$this->display('admin/index.html');
	}
	
	public function copy()
	{
		$data['ip'] = $this->input->ip_address();
		$data['serverEn'] = $this->input->server('SERVER_SOFTWARE');
		$data['serverVer'] = PHP_VERSION;
		$data['serverIp'] = $this->input->server('SERVER_ADDR');
		$this->load->model('user');
		$data['serverMysql'] = $this->user->getVersion();
// 		echo '<pre>';print_r($data['serverMysql']);
		
// 		$this->assign($data);
		$this->display('admin/copy.html');
	}
}

?>
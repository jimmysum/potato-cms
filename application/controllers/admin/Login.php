<?php
/**
 * 登陆注册类
 * @author Administrator0
 *
 */

class Login extends Admin_Controller 
{
	/**
	 * 规则验证
	 *
	 * @var array
	 */
	public $rules = array(
	    array(
	        'field' => 'username',
	        'label' => '用户名',
	        'rules' => 'required',
	        'errors' => array(
	            'required' => 'You must provide a %s.',
	        ),
	    ),
	    array(
	        'field' => 'password',
	        'label' => '密码',
	        'rules' => 'required',
	        'errors' => array(
	            'required' => 'You must provide a %s.',
	        ),
	    ),
// 	    array(
// 	        'field' => 'verify',
// 	        'label' => '验证码',
// 	        'rules' => 'required',
// 	        'errors' => array(
// 	            'required' => 'You must provide a %s.',
// 	        ),
// 	    )
	);
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	/**
	* @desc 
	* @access 
	* @author  Jimmy
	* @date	 2015-9-24下午2:56:32 
	* @param
	* @return
	*/
	public function login() 
	{
		$this->load->helper(array('form', 'url'));
		if ($this->input->post())
		{
			$this->load->library('form_validation');
			$this->form_validation->set_data($this->input->post());
			$this->form_validation->set_rules($this->rules);
			
			if ($this->form_validation->run() == TRUE)
			{
// 				$verify = $this->session->get_userdata('verify');
// 				if (strtolower($this->input->post('verify')) !== strtolower($verify['verify']['word']))
// 				{
// 					$this->outJson(104);
// 				}
				$this->load->model('M_Admin', 'admin');
				$info = $this->admin->validPassword($this->input->post('username'), $this->input->post('password'));
				if ($info)
				{
					unset($info['password']);
					$this->load->model('M_Role', 'role');
					$role = $this->role->getOne($info['role_id']);
					$this->load->model('M_Access', 'access');
					$node = $this->access->getList(array('role_id' => $role['id']));
					$authMenu = array();
					foreach($node as $k => $v)
					{
						$authMenu[] = $v['node_id'];
					}

					$data['info'] = $info;
					$data['node'] = $authMenu;
					$data['role'] = $role;
					$this->session->set_userdata('user', $data);
					$data = array();
					$data['loginip'] = $this->input->ip_address();
					$data['logintime'] = time();
					$data['id'] = $info['id'];
					$this->admin->update($data, 'id');

					redirect('/admin/main/index');
				}
				else 
				{
					$this->outJson(103);
				}
			}
			else 
			{
				$this->outJson(101, '', current($this->form_validation->error_array()));
			}
		}
		else 
		{
			$this->getVeriryInfo();
			// echo '<pre>';print_r($this->data);
			$this->assign($this->data);
			$this->display('admin/login.html');
		}
	}
	
	/**
	 * @desc
	 * @access
	 * @author  Jimmy
	 * @date	 2015-9-24下午2:56:32
	 * @param
	 * @return
	 */
	public function logOut()
	{
		$this->session->unset_userdata('user');
		redirect('/admin/login/login');
	}
	
	/**
	* @desc 
	* @access 
	* @author  Jimmy
	* @date	 2015-9-24下午4:15:19 
	* @param
	* @return
	*/
	public function getVeriryInfo()
	{
		$this->load->helper('captcha');
		$vals = array(
				'img_path'  => FCPATH . 'public/captcha/',
				'img_url'   => 'http://ci.ci.lamall.com/public/captcha/',
				'img_width'	=> '90',
				'img_height' => '28',
				'word_length'	=> 4,
				'font_size'	=> 25,
				'img_id'	=> 'verify_img',
		);
		
		$this->data['cap'] = create_captcha($vals);
		$this->session->set_userdata('verify', $this->data['cap']);
	}
	
	/**
	* @desc 
	* @access 
	* @author  Jimmy
	* @date	 2015-9-24下午4:32:32 
	* @param
	* @return
	*/
	public function veriryImg()
	{
		$this->getVeriryInfo();
		echo $this->data['cap']['src'];
	}
}

?>
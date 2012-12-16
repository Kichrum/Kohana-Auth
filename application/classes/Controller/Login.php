<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

	private $auth = NULL;
	public $template = 'login/form';
	
	public function action_index()
	{
		$username = $this->request->post('username');
		$password = $this->request->post('password');
		$this->template->title = 'Welcome';
		$this->template->entered = $this->auth->login($username, $password);
		if($this->template->entered)
		{
			$this->template->content = 'You\'re logged in!';
		}
		else
		{
			$this->template->content = 'You aren\'t logged in. Use test / test for log in.';
		}
	}
	
	/**
	 * Automatically executed before the controller action.
	 *
	 * @return  void
	 */
	public function before()
	{
		parent::before();
		$this->auth = new Auth_File(array(
			'hash_method' => 'sha256',
			'hash_key' => 985465,
			'session_key' => 'my_auth',
			'session_type' => Session::$default,
			'users' => array(
				'test' => 'b95006118d2933e42ee6715835f4e85cb43ea23a9c26a56d40bb0c4eeb5b9aff',
			),
		));
	}

} // End Login

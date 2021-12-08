<?php defined("BASEPATH") or exit();

class Init_Bamanat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->model("init_model", "i");
	}

	public function index()
	{
		$data = [
			'page' => "admin/form",
			'menu' => "admin/menu",
			'js'   => "admin/jquery/js_areakerja"
		];
		$this->load->view("main_template", $data);
	}
	/*
	private function c_pass($post) {
		// escape all inout
		$post = $this->security->xss_clean($post);
		$post = $this->corelib->escape_string($post);

		$post['password'] = md5($post['password']);

		return $this->i->c_pass($post);
	}

	private function auth($post) {
		// escape all inout
		$post = $this->security->xss_clean($post);
		$post = $this->corelib->escape_string($post);
		$post['password'] = md5($post['password']);
		return $this->i->auth($post);
	}

	public function logout() {
		session_destroy();
		redirect();
	}
	*/
	public function touch($type)
	{
		switch ($type) {
			case "auth":
				self::auth($_POST);
				break;
			case "c_pass":
				echo self::c_pass($_POST);
				break;
		}
	}
}

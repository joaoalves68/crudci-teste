<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model("login_model");
	}

	public function index()
	{
		$data["title"] = "Login - CodIgniter";

		$this->load->view('pages/login', $data);
	}

	public function login()
	{

		$email = $_POST['email'];
		$password = $_POST['password'];
		$user = $this->login_model->check($email, $password);

		if($user)
		{
			$this->session->set_userdata("logged_user", $user);
			redirect("dashboard");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_user");
		redirect("login");
	}
}

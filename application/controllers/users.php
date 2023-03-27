<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		permission();
		$this->load->model("users_model");
	}

	public function index()
	{
        $data["users"] = $this->users_model->index();

		$data["title"] = "Users - CodIgniter";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

    public function edit($id)
    {
        $data["user"] = $this->users_model->show($id);

		$data["title"] = "Editar Usuário - CodIgniter";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-users', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
    }

    public function update($id)
	{
		$user = $_POST;
        $user['password'] = md5($_POST['password']);

		$this->users_model->update($id, $user);

		redirect('users');
	}

    public function delete($id)
    {
        $this->users_model->destroy($id);

        redirect('users');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		permission();
		$this->load->model("users_model");
		$this->load->model("games_model");
		$this->load->model("search_model");
	}

	public function index()
	{
		$data["games"] = $this->games_model->index();

		$data["users"] = $this->users_model->index();

		$data["title"] = "Dashboard - CodIgniter";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function search()
	{
		$data["title"] = "Resultado da pesquisa por: " . $_POST['busca'];

		$data["result"] = $this->search_model->buscar($_POST['busca']);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}

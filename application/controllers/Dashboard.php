<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model("task_model");
		$this->load->model('user_model');
		$this->load->model('category_model');
    }

	
	public function index()
	{		
		$obj = new Task_model();
		$data["tasks"] = $obj->index();
		$data["title"] = "Dashboard - Tarefas";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
		$this->load->view('pages/dashboard', $data);
	}

	public function new()
    {        
		$this->user = new User_model();
		$data['users'] = $this->user->getAll();
		$this->category = new Category_model();
		$data['categories'] = $this->category->getAll();
		$data["title"] = "Tarefas";
		
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-task', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
	
	public function store()
    {
        $task = $_POST;
        $this->task_model->store($task);
        redirect("dashboard");
	}
	
	public function edit($id)
    {
		$this->user = new User_model();
		$data['users'] = $this->user->getAll();
		$this->category = new Category_model();
		$data['categories'] = $this->category->getAll();

		$data["task"] = $this->task_model->show($id);
        $data["title"] = "Editar Usuários";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-task', $data);
        $this->load->view('templates/js', $data);
	}
	
	public function update($id)
    {
        $task = $_POST;       	
        $this->task_model->update($id, $task);
        redirect("dashboard");
    }

	public function delete($id)
	{	
        $this->task_model->destroy($id);
        redirect("dashboard");
    }
}

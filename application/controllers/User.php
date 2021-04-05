<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
	{		
		$data["users"] = $this->user_model->index();
		$data["title"] = "Usuários";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
		$this->load->view('pages/user', $data);
    }

    public function new()
    {        
        $data["title"] = "Usuários";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-user', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function store()
    {
        $task = $_POST;
        $this->user_model->store($task);
        redirect("user");
    }

    public function edit($id)
    {

		$data["user"] = $this->user_model->show($id);
        $data["title"] = "Editar Usuários";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-user', $data);
        $this->load->view('templates/js', $data);
    }

    public function update($id)
    {
        $user = $_POST;       	
        $this->user_model->update($id, $user);
        redirect("user");
    }

    public function delete($id)
    {              	
        $this->user_model->destroy($id);
        redirect("user");
    }
    
}
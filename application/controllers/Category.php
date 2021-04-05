<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("category_model");
    }

    public function index()
	{		
		$data["categories"] = $this->category_model->index();
		$data["title"] = "Categoria";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
		$this->load->view('pages/category', $data);
    }

    public function new()
    {        
        $data["title"] = "Categoria";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-category', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }
    
    public function store()
    {
        $category = $_POST;
        $this->category_model->store($category);
        redirect("category");
    }

    public function edit($id)
    {

		$data["category"] = $this->category_model->show($id);
        $data["title"] = "Editar Categoria";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-category', $data);
        $this->load->view('templates/js', $data);
    }

    public function update($id)
    {
        $category = $_POST;       	
        $this->category_model->update($id, $category);
        redirect("category");
    }

    public function delete($id)
    {              	
        $this->category_model->destroy($id);
        redirect("category");
    }


}

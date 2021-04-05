<?php

class Category_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_category")->result_array();
    }

    public function store($category)
    {
        $this->db->insert("tb_category",$category);
    }

    public function show($id)
    {
        return $this->db->get_where("tb_category",array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $category)
    {
        $this->db->where("id",$id);
        return $this->db->update("tb_category",$category);
    }

    public function destroy($id)
    {
        $this->db->where("id",$id);
        return $this->db->delete("tb_category");
    }

    function getAll() {
        $this->db->select('id,description');

        $result = $this->db->get("tb_category");
        return $result->result();
    }

}
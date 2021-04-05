<?php

class Task_model extends CI_Model {

    public function index()
    {
       
        $sql = "
            select
                t.id
                ,t.description
                ,u.name as user
                ,t.final_date
                ,c.description as category
            from tb_task t
                join tb_users u on t.user_id = u.id
                join tb_category c on t.category_id = c.id
            order by id
        ";

        return $this->db->query($sql)->result();
    }

    public function store($task)
    {
        $this->db->insert("tb_task",$task);
    }

    public function show($id)
    {
        return $this->db->get_where("tb_task",array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $task)
    {
        $this->db->where("id",$id);
        return $this->db->update("tb_task",$task);
    }

    public function destroy($id)
    {
        $this->db->where("id",$id);
        return $this->db->delete("tb_task");
    }
}
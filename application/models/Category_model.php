<?php
class Category_model extends CI_Model {

    public function all()
    {
        return $this->db->get('category')->result();
    }

    public function find($id)
    {
        return $this->db->get_where('category',array('id'=>$id))->result()[0];
    }

    public function insert($data)
    {
        $this->db->insert('category',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }
}
<?php
class Article_model extends CI_Model {

    public function all()
    {
        return $this->db->get('articles')->result();
    }

    public function find($id)
    {
        return $this->db->get_where('articles',array('id'=>$id))->result()[0];
    }

    public function insert($data)
    {
        $this->db->insert('articles',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('articles', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('articles');
    }
}
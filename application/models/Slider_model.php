<?php
class Slider_model extends CI_Model {

    public function all()
    {
        return $this->db->get('slider')->result();
    }

    public function find($id)
    {
        return $this->db->get_where('slider',array('id'=>$id))->result()[0];
    }

    public function insert($data)
    {
        $this->db->insert('slider',$data);
    }

    public function update($id,$data)
    {
        $this->db->where('id', $id);
        $this->db->update('slider', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider');
    }
}
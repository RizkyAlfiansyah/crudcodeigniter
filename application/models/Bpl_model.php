<?php

class Bpl_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_bpl($id)
    {
        return $this->db->get_where('bpl',array('id'=>$id))->row_array();
    }

    function get_all_bpl()
    {
        $this->db->order_by('pts', 'desc');
        return $this->db->get('bpl')->result_array();
    }
 
    function add_bpl($params)
    {
        $this->db->insert('bpl',$params);
        return $this->db->insert_id();
    }
 
    function update_bpl($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('bpl',$params);
    }

    function delete_bpl($id)
    {
        return $this->db->delete('bpl',array('id'=>$id));
    }
}

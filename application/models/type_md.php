<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/16/2015
 * Time: 4:06 PM
 */

class type_md extends CI_Model{

    function add_type($data)
    {
        $this->db->insert('tos_type',$data);
    }
    function update_type($data,$cond)
    {
        $this->db->where('ty_id',$cond);
        $this->db->insert('tos_type',$data);
    }
    function disable_type($cond)
    {
        $data=array('ty_status'=>1);
        $this->db->where('ty_id',$cond);
        $this->db->insert('tos_type',$data);
    }
}
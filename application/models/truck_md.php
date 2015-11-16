<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/11/2015
 * Time: 9:59 AM
 */

class truck_md extends CI_Model {

    function add_type($data)
    {
      $this->db->insert('tos_truck_type',$data);
    }
    function add_truck($data)
    {
        $this->db->insert('tos_truck',$data);
    }
    function update_truck($data,$cond)
    {
        $this->db->where('t_id',$cond);
        $this->db->update('tos_truck',$data);
    }
    function view_truck()
    {
        $data=$this->db->get('tos_truck');
        return $data->result_array();
    }
    function show_truck_type()
    {
        $data=$this->db->get('tos_truck_type');
        return $data->result_array();
    }
    function show_selected_type()
    {
        $this->db->where('status',1);
        $data=$this->db->get('tos_truck_type');
        return $data->result_array();
    }

    function update_type($data,$cond)
    {
        $this->db->where('t_typeid',$cond);
        $this->db->update('tos_truck_type',$data);
       // echo $this->db->last_query();
    }
    function disable_type($cond)
    {
        $data=array('status'=>0);
        $this->db->where('t_typeid',$cond);
        $this->db->update('tos_truck_type',$data);
        //echo $this->db->last_query();
    }
    function disable_truck($cond)
    {
        $data=array('t_status'=>0);
        $this->db->where('t_id',$cond);
        $this->db->update('tos_truck',$data);
        //echo $this->db->last_query();
    }
}
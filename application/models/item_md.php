<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/13/2015
 * Time: 3:30 PM
 */

class item_md extends CI_Model {

    function add_item_type($data)
    {
        $this->db->insert('tos_itemweight',$data);
        //echo $this->db->last_query();
    }

    function update_item_type($data,$cond)
    {
        $this->db->where('iw_id',$cond);
        $this->db->update('tos_itemweight',$data);
        //echo $this->db->last_query();
    }
    function show_type()
    {
        $data=$this->db->get('tos_itemweight');
               return $data->result_array();
    }
    function disable_type($cond)
    {
        $data=array('iw_status'=>0);
        $this->db->where('iw_id',$cond);
        $this->db->update('tos_itemweight',$data);

    }


    function add_item($data)
    {
        //print_r($data);
        $this->db->insert('tos_item',$data);
    }

    function update_item($data,$cond)
    {
        $this->db->where('it_id',$cond);
        $this->db->update('tos_item',$data);
    }

    function disable_item($cond)
    {
        $data=array('it_status'=>0);
        $this->db->where('it_id',$cond);
        $this->db->update('tos_item',$data);
    }

    function show_item()
    {
        $data=$this->db->get('tos_item');
        return $data->result_array();
    }
    function selected_type()
    {
        $this->db->where('iw_status',1);
        $data=$this->db->get('tos_itemweight');
        return $data->result_array();
    }



}
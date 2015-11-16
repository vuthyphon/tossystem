<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/20/2015
 * Time: 11:35 AM
 */

class user_md extends CI_Model {

    function c_user($data)
    {
        $this->db->insert('tos_user',$data);
    }

    function show_user($us_type)
    {
        $this->db->where('us_type',$us_type);
        $data=$this->db->get('tos_user');
        return $data->result_array();
    }

    function check_login($user,$pwd,$us_type)
    {
        $con=array('us_name'=>$user,"us_password"=>$pwd,'us_type'=>$us_type,'us_status'=>1);
        $this->db->where($con);
        $data=$this->db->get('tos_user');
        //print_r($data);
        return $data->num_rows();
    }

    function edit_user($id)
    {
        $this->db->where('us_id',$id);
        $data=$this->db->get('tos_user');
        return $data->row_array();

    }
    function delete_user($id)
    {
        $this->db->where('us_id',$id);
        $cond=array('us_status'=>0);
        $this->db->update('tos_user',$cond);
    }

    function enable_user($id)
    {
        $this->db->where('us_id',$id);
        $cond=array('us_status'=>1);
        $this->db->update('tos_user',$cond);
    }
    function update_user($id,$data)
    {
        $this->db->where('us_id',$id);
        $this->db->update('tos_user',$data);
    }

}
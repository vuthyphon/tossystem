<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/16/2015
 * Time: 1:46 PM
 */

class Setting extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            // Your own constructor code
            $this->load->model('region_md');
            $this->load->model('type_md');
            // $us_type=$this->session->userdata('us_type');
            $this->check_login();
        }

        function check_login()
        {
            $user=$this->session->userdata('us_type');
            if(isset($user))
            {

            }
            else{
                redirect(base_url());
            }
        }
        function index()
        {
            $data['main_page']='v_setting';
            $this->load->view('home/template/template',$data);
        }
        function add_type()
        {
            $data=array('ty_name'=>$this->input->post('ty_name'),'ty_status'=>$this->input->post('ty_status'));
            $this->type_md->add_type($data);
        }
        function update_type()
        {
            $cond=$this->input->post('ty_id');
            $data=array('ty_name'=>$this->input->post('ty_name'),'ty_status'=>$this->input->post('ty_status'));
            $this->type_md->update_type($data,$cond);
        }

        function disable_type()
        {
            $this->type_md->disable_type();
        }
}
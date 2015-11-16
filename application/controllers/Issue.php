<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/6/2015
 * Time: 1:51 PM
 */

class Issue {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        //$this->load->model('truck_md');
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
        $data['main_page']='v_truck';
        $this->load->view('home/template/template',$data);
    }
}
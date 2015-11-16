<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/19/2015
 * Time: 3:57 PM
 */

class User extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('user_md');
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
        $data['us_dt']=$this->user_md->show_user($this->session->userdata('us_type'));
        $data['main_page']='user';
        $this->load->view('home/template/template',$data);
    }
    function edit_user($id)
    {
        $data['us_dt']=$this->user_md->show_user($this->session->userdata('us_type'));
        $data['rows']=$this->user_md->edit_user($id);
        $data['main_page']='user';
        $this->load->view('home/template/template',$data);
    }

    function enable_user($id)
    {
        $this->user_md->enable_user($id);
        redirect(base_url('user/'));
    }
    function create_user()
    {
        $data=array('us_fullname'=>$this->input->post('us_fullname'),'us_gender'=>$this->input->post('gender'),'us_name'=>$this->input->post('us_name'),
            'us_password'=>md5($this->input->post('us_password')),'us_status'=>$this->input->post('us_status'),'us_type'=>$this->input->post('us_type'),'us_level'=>$this->input->post('us_level'));
        print_r($data);
        $this->user_md->c_user($data);
        //redirect(base_url('user/'));
    }

    function update_user()
    {
        $id=$this->input->post('us_id');
        $password=$this->input->post('us_password');
        if($password)
        {
            $data=array('us_fullname'=>$this->input->post('us_fullname'),'us_gender'=>$this->input->post('gender'),'us_name'=>$this->input->post('us_name'),
                'us_password'=>md5($this->input->post('us_password')),'us_status'=>$this->input->post('us_status'),'us_type'=>$this->input->post('us_type'),'us_level'=>$this->input->post('us_level'));
        }
        else
        {
          $data=array('us_fullname'=>$this->input->post('us_fullname'),'us_gender'=>$this->input->post('gender'),'us_name'=>$this->input->post('us_name'),
                'us_status'=>$this->input->post('us_status'),'us_type'=>$this->input->post('us_type'),'us_level'=>$this->input->post('us_level'));
        }

        $this->user_md->update_user($id,$data);
        redirect(base_url('user/'));
    }
    function delete_user($id)
    {
        $this->user_md->delete_user($id);
        redirect(base_url('user/'));
    }
    //create captcha image


}
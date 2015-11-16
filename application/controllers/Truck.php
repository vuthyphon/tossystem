<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/19/2015
 * Time: 3:57 PM
 */

class Truck extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('truck_md');
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
        $data['truck_type']=$this->truck_md->show_truck_type();
        $data['select_type']=$this->truck_md->show_selected_type();
        $data['v_truck']=$this->truck_md->view_truck();
        //print_r($data['select_type']);
       $this->load->view('home/template/template',$data);
    }

    function type()
    {
        $data['main_page']='v_truck_type';
        $data['truck_type']=$this->truck_md->show_truck_type();

        $data['select_type']=$this->truck_md->show_selected_type();
        $this->load->view('home/template/template',$data);
    }

    function add_truck()
    {
        $data=array('t_typeid'=>$this->input->post('t_type'),'t_status'=>$this->input->post('t_status'),'t_size'=>$this->input->post('t_size')
        ,'t_platenumber'=>$this->input->post('t_pnumber')
        );
        $this->truck_md->add_truck($data);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Data has been save
        </div>');
        redirect(base_url('truck'));
    }

    function update_truck()
    {
        $data=array('t_typeid'=>$this->input->post('t_type'),'t_status'=>$this->input->post('t_status'),'t_size'=>$this->input->post('t_size')
        ,'t_platenumber'=>$this->input->post('t_pnumber')
        );
        $cond=$this->input->post('t_id');
        $this->truck_md->update_truck($data,$cond);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Data has been updated.
        </div>');
        redirect(base_url('truck'));
    }

    function disable_truck($cond){

        $this->truck_md->disable_truck($cond);
        $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Record has been disable
                        </div>');
        redirect(base_url('truck'));
    }

    function add_type(){
        echo $this->input->post('status');
        $data=array('t_typename'=>$this->input->post('truck_type'),'status'=>$this->input->post('status'));
       $this->truck_md->add_type($data);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Data has been save
        </div>');
        redirect(base_url('truck/type'));
    }

    function update_type(){
        //echo $this->input->post('status');
        $cond=$this->input->post('type_id');
        $data=array('t_typename'=>$this->input->post('truck_type'),'status'=>$this->input->post('status'));
        //print_r($data);
        //echo $cond;
        $this->truck_md->update_type($data,$cond);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Data has been update
                        </div>');
        redirect(base_url('truck/type'));

    }

    function disable($cond){
        $this->truck_md->disable_type($cond);
        $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Record has been disable
                        </div>');
        redirect(base_url('truck/type'));
    }
}
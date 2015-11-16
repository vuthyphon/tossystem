<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/13/2015
 * Time: 10:14 AM
 */

class Item extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('item_md');
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
        $data['main_page']='v_item';
        $data['item_type_data']=$this->item_md->show_type();
        $data['item_type']=$this->item_md->selected_type();
        $data['item_dt']=$this->item_md->show_item();

        $this->load->view('home/template/template',$data);
    }

    function type()
    {
        $data['main_page']='v_item_type';
        //$data['truck_type']=$this->item_md->show_truck_type();
        $data['item_type_data']=$this->item_md->show_type();
        //$data['select_type']=$this->item_md->show_selected_type();
        $this->load->view('home/template/template',$data);
    }

    function add_type()
    {
        $data=array('iw_name'=>$this->input->post('it_typename'),'iw_unitcan'=>$this->input->post('it_unit'),'iw_type'=>$this->input->post('type'),'iw_status'=>$this->input->post('it_type_status'));
        $this->item_md->add_item_type($data);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Data has been save
        </div>');
        redirect(base_url('item/type'));
    }

    function update_type()
    {
        $cond=$this->input->post('it_typeid');
        $data=array('iw_name'=>$this->input->post('it_typename'),'iw_unitcan'=>$this->input->post('it_unit'),'iw_type'=>$this->input->post('type'),'iw_status'=>$this->input->post('it_type_status'));
        $this->item_md->update_item_type($data,$cond);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Data has been updated
        </div>');
        redirect(base_url('item/type'));
    }

    function disable_type($cond){

        $this->item_md->disable_type($cond);
        $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Record has been disable
                        </div>');
        redirect(base_url('item/type'));
    }

    function add_item()
    {
        $data=array('it_code'=>$this->input->post('it_code'),'it_name'=>$this->input->post('it_name'),'it_other'=>$this->input->post('it_other'),
            'it_status'=>$this->input->post('it_status'),'it_type'=>$this->input->post('type'),'iw_id'=>$this->input->post('it_type')
        );
        $this->item_md->add_item($data);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Record has been add
        </div>');
        redirect(base_url('item/'));
    }

    function disable_item($id)
    {
        $this->item_md->disable_item($id);
        $this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Record has been disable
        </div>');
        redirect(base_url('item/'));
    }

    function update_item()
    {
        $code=$this->input->post('it_id');
        $data=array('it_code'=>$this->input->post('it_code'),'it_name'=>$this->input->post('it_name'),'it_other'=>$this->input->post('it_other'),
            'it_status'=>$this->input->post('it_status'),'it_type'=>$this->input->post('type'),'iw_id'=>$this->input->post('it_type')
        );
        $this->item_md->update_item($data,$code);
        $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Success!</strong> Record have has been updated
        </div>');
        redirect(base_url('item/'));
    }


}
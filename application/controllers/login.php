<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/19/2015
 * Time: 3:57 PM
 */

class login extends CI_Controller {

    function cbl()
    {
        $this->session->set_userdata('us_type', 'cbl');
        $data['captcha']=$this->Captcha_image();
        $this->load->view('login/login_cbl',$data);
    }

    function coca()
    {
        $this->session->set_userdata('us_type', 'coca');

        $data['captcha']=$this->Captcha_image();
        $this->load->view('login/login_coca',$data);
    }

    function total()
    {
        $this->session->set_userdata('us_type', 'total');
        $data['captcha']=$this->Captcha_image();
        $this->load->view('login/login_total',$data);
    }

    function check_login()
    {
        $user=$this->input->post('us_name');
        $pwd=$this->input->post('us_pwd');
        $us_type=$this->session->userdata('us_type');
        $this->load->model('user_md');
        $rows=$this->user_md->check_login($user,md5($pwd),$us_type);
        //echo $rows;
        if($rows>0)
        {
            redirect('user/');
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Invalid Username or Password!</div>');
            redirect('login/'.$us_type);
        }
    }
    //create captcha image

    function Captcha_image()
    {
        $this->load->helper('captcha');
        $vals = array(
            'word' => '',
            'img_path' => 'captcha/',
            'img_url' => base_url('captcha'),
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => 150,
            'img_height' => 30,
            'expiration' => 7200,
            'word_length' => 5,
            'font_size' => 18,
            'img_id' => '111',

            // White background and border, black text and red grid
            'colors' => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $data = create_captcha($vals);
        $this->session->set_userdata('captcha',$data['word']);
        //echo $this->session->userdata('captcha');
        return $data;
    }
}
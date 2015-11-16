<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/19/2015
 * Time: 11:58 AM
 */

class Home extends CI_Controller {

    function index()
    {
        $this->load->view('home/index');
    }


}
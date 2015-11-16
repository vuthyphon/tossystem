<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 11/5/2015
 * Time: 1:45 PM
 */
$this->load->view('home/template/header');
$this->load->view('home/template/top_nav');
$this->load->view('home/template/menu');
$this->load->view('home/'.$main_page);
$this->load->view('home/template/footer');
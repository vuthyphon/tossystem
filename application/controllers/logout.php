<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/19/2015
 * Time: 3:57 PM
 */

class Logout extends CI_Controller {

     function index()
     {
         $this->session->sess_destroy();
         redirect(base_url());
     }
}
<?php
class logout extends CI_Controller
{
 public function index()
 {
      $this->session->unset_userdata($data);
      $this->session->sess_destroy();
      redirect('login/index');
 }
}
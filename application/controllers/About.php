<?php
defined('BASEPATH') or exit();
class About extends MY_Controller
{
  public function index() {
    $main_view = 'home/about';
    $this->load->view('home/template', compact('main_view'));
  }
}
 ?>

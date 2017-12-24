<?php defined('BASEPATH') or exit();

Class Contact extends MY_Controller
{
    public function index() {
      $main_view = 'home/contact/index';
      $this->load->view('home/template', compact('main_view'));
    }
}
?>

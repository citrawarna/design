<?php
defined('BASEPATH') or exit();

class Admin extends Operator_Controller
{
  public function index() {
    $main_view = 'backend/index';
    $this->load->view('backend/template', compact('main_view'));
  }
}
 ?>

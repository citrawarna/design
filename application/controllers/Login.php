<?php
defined('BASEPATH') or exit();

class Login extends MY_Controller
{
  public function index() {
    if(!$_POST) {
      $input = (object) $this->login->getDefaultValues();
    } else {
      $input = (object) $this->input->post(null, true);
    }

    if(!$this->login->validate()) {
      $this->load->view('backend/form_login', compact('input'));
      return;
    }

    if($this->login->login($input)) {
      redirect(base_url('admin'));
    } else {
      $this->session->set_flashdata('error', '<p class="alert alert-danger">Username atau password salah!</p>');
    }
    redirect('login');
  }

  public function logout() {
    $this->login->logout();
    redirect(base_url());
  }
}

 ?>

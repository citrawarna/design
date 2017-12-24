<?php
defined('BASEPATH') or exit();

class User extends Admin_Controller
{
  public function __construct(){
    parent::__construct();

  }

  public function index() {
    $users = $this->db->get('tb_user')->result();

    $no = 1;
    $jumlah = count($users);
    $main_view = 'backend/user/index';
    $this->load->view('backend/template', compact('halaman', 'main_view', 'users', 'jumlah', 'no'));

  }

  public function tambah() {
    if(!$_POST) {
      $input = (object) $this->user->getDefaultValues();
    } else {
      $input = (object) $this->input->post(null, true);
    }

    if(!$this->user->validate()) {
      $halaman = $this->halaman;
      $main_view = 'backend/user/form';
      $form_action = 'user/tambah';

      $this->load->view('backend/template', compact('halaman', 'main_view', 'form_action', 'input'));
      return;
    }

    if($this->db->insert('tb_user', $input)) {
      $this->session->set_flashdata('success', 'Data user berhasil disimpan.');
    } else {
      $this->session->set_flashdata('error', 'Data user gagal disimpan.');
    }
    redirect('user');
  }
  public function alpha_numeric_coma_dash_dot_space($str) {
    if(!preg_match('/^[a-zA-Z0-9]+$/i',$str)) {
      $this->form_validation->set_message('alpha_numeric_coma_dash_dot_space', 'Hanya boleh berisi huruf dan angka');
      return false;
    }
  }
  public function numeric($str) {
    if(!preg_match('/^[0-9]+$/i',$str)) {
      $this->form_validation->set_message('alpha_numeric_coma_dash_dot_space', 'Hanya boleh berisi angka');
      return false;
    }
  }

  public function is_format_tanggal_valid($str) {
    if(!preg_match('^(19|20)\d\d([-/.])(0[1-9]|1[012])\2(0[1-9]|[12][0-9]|3[01])^', $str)) {
      $this->form_validation->set_message('is_format_tanggal_valid', 'Format tanggal tidak valid. (yyyy-mm-dd)');
      return false;
    }
    return true;
  }

  public function edit($id = null) {
    $sql = "SELECT * from tb_user where id_user = '$id'";
    $data = $this->db->query($sql)->row();
    $user = $data;
    if(!$user) {
      $this->session->set_flashdata('warning', 'Data user tidak ada');
      redirect('user');
    }
    if(!$_POST) {
      $input = (object) $user;
    } else {
      $input = (object) $this->input->post(null, true);
    }

    if(!$this->user->validate()) {
      $main_view = 'backend/user/form';
      $form_action = "user/edit/$id";

      $this->load->view('backend/template', compact('main_view', 'form_action', 'input'));
      return;
    }

    if($this->db->where('id_user', $id)->update('tb_user', $input)) {
      $this->session->set_flashdata('success', 'Data user berhasil diedit');
    } else {
      $this->session->set_flashdata('error', 'Data user gagal diedit');
    }
    redirect('user');
  }

  public function delete($id) {
    if($this->db->where('id_user', $id)->delete('tb_user')) {
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
    } else {
      $this->session->set_flashdata('error', 'Data gagal dihapus');
    }
    redirect('user');
  }

}
  // public function username_unik() {
  //   $username = $this->input->post('username');
  //   $id_user = $this->input->post('id_user');
  //
  //   $this->db->where('id_user', $username);
  //   !$id_user || $this->db->where('id_user !=', $id_user);
  //   $username = $this->db->get('tb_user');
  //
  //   if(count($username)) {
  //     $this->form_validation->set_message('username_unik', '%s sudah digunakan.');
  //     return false;
  //   }
  //   return true;
  // }


 ?>

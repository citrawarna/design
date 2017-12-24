<?php
defined('BASEPATH') or exit();

class Data_Video extends Operator_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->model('Dvideo_model', 'Dvideo');
  }
  public function index() {
    $videos = $this->db->query('SELECT v.id_video, u.nama_user, v.tanggal_upload, v.judul, v.caption, v.link_video
    from tb_video v inner join tb_user u on (v.id_user = u.id_user) order by v.tanggal_upload desc')->result();
    $no = 1;
    $main_view = 'backend/video/index';
    $this->load->view('backend/template', compact('videos', 'no', 'main_view'));
  }

  public function tambah() {
    if(!$_POST) {
      $input = (object) $this->Dvideo->getDefaultValues();
    } else {
      $input = (object) $this->input->post(null, true);
    }

    if(!$this->Dvideo->validate()) {
      $main_view = 'backend/video/form';
      $form_action = 'data_video/tambah';

      $this->load->view('backend/template', compact('main_view', 'form_action', 'input'));
      return;
    }

    if($this->db->insert('tb_video', $input)) {
      $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
    } else {
      $this->session->set_flashdata('error', 'Data gagal ditambahkan');
    }
    redirect('data_video');
  }

  public function edit($id = null) {
    $data = $this->db->where('id_video', $id)->get('tb_video')->row();
    if(!$data) {
      $this->session->set_flashdata('warning', 'Data tidak ditemukan');
      redirect('data_video');
    }
    if(!$_POST) {
      $input = (object) $data;
    } else {
      $input = (object) $this->input->post(null, true);
    }
    if(!$this->Dvideo->validate()) {
      $main_view = 'backend/video/form';
      $form_action = "data_video/edit/$id";

      $this->load->view('backend/template', compact('main_view', 'form_action', 'input'));
      return;
    }
    if($this->db->where('id_video', $id)->update('tb_video', $input)) {
      $this->session->set_flashdata('success',  'Data berhasil diedit');
    } else {
      $this->session->set_flashdata('error', 'Data gagal diedit');
    }
    redirect('data_video');
  }

  public function delete($id) {
    if($this->db->where('id_video', $id)->delete('tb_video')) {
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
    } else {
      $this->session->set_flashdata('error', 'Data gagal dihapus');
    }
    redirect('data_video');
  }
}

 ?>

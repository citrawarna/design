<?php
defined('BASEPATH') or exit();
class Data_Foto extends Operator_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('Dfoto_model', 'Dfoto');
  }
  public function index($page = null) {
    $no = 1;
    $fotos = $this->Dfoto->getAllFoto($page);
    $jumlah = $this->Dfoto->getAllFotoCount();
    $main_view = 'backend/foto/index';
    $this->load->view('backend/template', compact('no', 'fotos', 'jumlah', 'main_view'));
  }

  public function tambah() {
    if(!$_POST) {
      $input = (object) $this->Dfoto->getDefaultValues();
    } else {
      $input = (object) $this->input->post(null, true);
    }

    if(!empty($_FILES) && $_FILES['foto']['size'] > 0) {
      $fotoFileName = date('YmdHis');
      $upload = $this->Dfoto->uploadFoto('foto', $fotoFileName);

        if($upload) {
          $input->foto = "$fotoFileName.jpg";
        }
    }
    if(!$this->Dfoto->validate() || $this->form_validation->error_array()) {
      $main_view = 'backend/foto/form';
      $form_action = 'data_foto/tambah';
      $this->load->view('backend/template', compact('main_view', 'form_action', 'input'));
      return;
    }

    if($this->db->insert('tb_foto', $input)) {
      $this->session->set_flashdata('success', 'Data Foto berhasil ditambah');
    } else {
      $this->session->set_flashdata('error', 'Data Foto gagal ditambahkan');
    }
      redirect('data_foto');
  }

  public function edit($id = null) {
    $sql = "SELECT * FROM tb_foto where id_foto = '$id'";
    $query = $this->db->query($sql)->row();
    $foto = $query;

    if(!$foto) {
      $this->session->set_flashdata('warning', 'Data foto tidak ditemukan');
      redirect('foto');
    }

    if(!$_POST) {
      $input = (object) $foto;
    } else {
      $input = (object) $this->input->post(null, true);
      $input->foto = $foto->foto;
      //set untuk cover preview
    }
    //upload new cover if any
    $fotoFileName = date('YmdHis'); // cover file name
    $upload = $this->Dfoto->uploadFoto('foto', $fotoFileName);
    if($upload) {
      $input->foto = "$fotoFileName.jpg";
      //delete old cover
      if($foto->foto) {
        $this->Dfoto->deleteFoto($foto->foto);
      }
    }
    //something wrong
    if(!$this->Dfoto->validate() || $this->form_validation->error_array()) {
      $main_view = 'backend/foto/form';
      $form_action = "data_foto/edit/$id";
      $this->load->view('backend/template', compact('main_view', 'form_action', 'input'));
      return;
    }
    //upadate data
    if($this->db->where('id_foto', $id)->update('tb_foto', $input)) {
      $this->session->set_flashdata('success', 'Data berhasil diedit');
    } else {
    $this->session->set_flashdata('error', 'Data gagal diedit');
    }
    redirect('data_foto');
  }

  public function delete($id = null) {
    $foto = $this->db->where('id_foto', $id)->get('tb_foto')->row();
    if(!$foto) {
      $this->session->set_flashdata('warning', 'Data foto tidak ditemukan');
      redirect('data_foto');
    }
    if($this->db->where('id_foto', $id)->delete('tb_foto')) {
      //delete gambar
      $this->Dfoto->deleteFoto($foto->foto);
      $this->session->set_flashdata('success', 'Data foto berhasil dihapus');
    } else {
      $this->session->set_flashdata('error', 'Data foto gagal dihapus');
    }
    redirect('data_foto');
  }

}
 ?>

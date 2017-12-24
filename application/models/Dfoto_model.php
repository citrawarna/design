<?php
defined('BASEPATH') or exit();

class Dfoto_model extends MY_Model
{
  public function getAllFoto($page = null) {
    $offset = $this->calculateRealOffset($page);
    $sql = "SELECT f.id_foto, u.nama_user, f.tanggal_upload, f.judul, f.caption, f.foto from tb_foto f inner join tb_user u
    on (f.id_user = u.id_user) order by f.tanggal_upload desc ";
    return $this->db->query($sql)->result();
  }

  public function getAllFotoCount() {
    $sql = "SELECT COUNT(tb_foto.id_foto) as Total from tb_foto ";
    return $this->db->query($sql)->row();
  }

  public function getValidationRules() {
    $validationRules = [
      [
        'field' => 'id_user',
        'label' => 'ID User',
        'rules' => 'trim|required'
      ],
      [
        'field' => 'tanggal_upload',
        'label' => 'Tanggal Upload',
        'rules' => 'trim|required'
      ],
      [
        'field' => 'judul',
        'label' => 'Judul',
        'rules' => 'required'
      ],
      [
        'field' => 'caption',
        'label' => 'Caption',
        'rules' => 'trim|required'
      ],
    ];
    return $validationRules;
  }

  public function getDefaultValues() {
    return [
      'id_user' => '',
      'tanggal_upload' => '',
      'judul' => '',
      'caption' => ''
    ];
  }

  public function uploadFoto($fieldName, $fileName) {
    $config = [
      'upload_path' => './gambar/',
      'file_name' => $fileName,
      'allowed_types' => 'jpg|png',
      'max_size' => 5120,
      'max_width' => 0,
      'max_height' => 0,
      'overwrite' => true,
      'file_ext_tolower' => true
    ];

    $this->load->library('upload', $config);
    if($this->upload->do_upload($fieldName)) {
      return $this->upload->data();
    } else {
      return false;
    }
  }

  public function deleteFoto($imgFile) {
    if(file_exists("./gambar/$imgFile")) {
      unlink("./gambar/$imgFile");
    }
  }


}
 ?>

<?php
defined('BASEPATH') or exit();

class Photo_model extends MY_Model
{
    protected $perPage = 18;

    public function getAllPhoto($page = null) {
      $offset = $this->calculateRealOffset($page);
      return $this->db->limit($this->perPage, $offset)->order_by('tanggal_upload', 'desc')->get('tb_foto')->result();
    }

    public function countAllPhoto() {
      return $this->db->get('tb_foto')->num_rows();
    }

    public function getPhoto($id_foto) {
      return $this->db->where('id_foto', $id_foto)->get('tb_foto')->row();
    }

}
 ?>

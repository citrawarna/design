<?php
defined('BASEPATH') or exit();

class Video_model extends MY_Model
{
  protected $perPage = 4;

  public function getAllVideo($page = null) {
    $offset = $this->calculateRealOffset($page);
    return $this->db->limit($this->perPage, $offset)->order_by('tanggal_upload', 'desc')->get('tb_video')->result();
  }

  public function countAllVideo() {
    return $this->db->get('tb_video')->num_rows();
  }

  public function getVideo($id_video) {
    return $this->db->query("SELECT v.id_video, u.nama_user, v.tanggal_upload, v.judul, v.caption, v.link_video from tb_video v inner join tb_user u
    on (v.id_user = u.id_user) where v.id_video = '$id_video' order by v.tanggal_upload desc")->row();
  }
}
 ?>

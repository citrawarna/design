<?php
defined('BASEPATH') or exit();

class Home Extends CI_Controller
{
    public function index($page = null) {
      $perPage = 2;
        if($page == null) {
          $offset = 0;
        } else {
          $offset = ($page * $perPage) - $perPage;
        }
      $videos = $this->db->limit($perPage, $offset)->order_by('tanggal_upload', 'desc')->get('tb_video')->result();
      $this->load->view('home/index', compact('videos'));
    }

}
 ?>

<?php
defined('BASEPATH') or exit();

class Video extends MY_Controller
{
  public function index($page = null) {
    $videos = $this->video->getAllVideo($page);
    $jumlah = $this->video->countAllVideo();
    $pagination = $this->video->makePagination(site_url('video/page/'), 3, $jumlah);
    $main_view = 'home/video/index';
    $this->load->view('home/template', compact('main_view', 'videos', 'pagination'));
  }

  public function detail($id = null) {
    if($id == null) redirect('video');

    $data = $this->video->getVideo($id);

    if(!$data) redirect('video');

    $main_view = 'home/video/detail';
    $this->load->view('home/template', compact('main_view', 'data'));
    }
  
}
 ?>

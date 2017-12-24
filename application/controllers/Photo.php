<?php
defined('BASEPATH') or exit();

class Photo extends MY_Controller
{
  public function index($page = null) {
    $photos = $this->photo->getAllPhoto($page);
    $jumlah = $this->photo->countAllPhoto();
    $pagination = $this->photo->makePagination(site_url('photo/page/'), 3, $jumlah);
    $main_view = 'home/photo/index';
    $this->load->view('home/template', compact('main_view', 'photos', 'pagination'));
  }

  public function detail($id = null) {
    if($id == null) redirect('photo');

    $data = $this->photo->getPhoto($id);

    if(!$data) redirect('photo');

    $main_view = 'home/photo/detail';
    $this->load->view('home/template', compact('main_view', 'data'));
    }
}

 ?>

<?php
  $is_login = $this->session->userdata('is_login');
  $level = $this->session->userdata('level');

 ?>

<style media="screen">
  .txtclr {
    color:white;
  }
</style>
  <div class="container-fluid" style="background-color:#f44250;">
    <div class="navbar-header">
     <?= anchor('admin', '<div class ="txtclr"> Bali Massive Shuffle </div>', ['class' => 'navbar-brand']) ?>
   </div>
  </div>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
      <li <?php if($this->uri->segment(1)=="data_foto"){echo " div class ='active' ";} ?> > <?= anchor('data_foto', 'DATA FOTO' ) ?> </li>
      <li <?php if($this->uri->segment(1)=="data_video"){echo " div class ='active' ";} ?> > <?= anchor('data_video', 'DATA VIDEO' ) ?></li>
      <?php if($level=='admin') : ?>

        <li id="menu-user" <?php if($this->uri->segment(1)=="user"){echo " div class ='active'";} ?> > <?= anchor('user', 'DATA USER' ) ?></li>

    <?php endif ?>
      <li><?= anchor('login/logout', 'LOGOUT', ['onclick'=> "return confirm('Apakah anda Yakin akan logout?')"] ) ?></li>
    </ul>
  </div>

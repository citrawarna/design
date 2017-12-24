<?php
$ids = $this->session->userdata('id_user');
$username = $this->session->userdata('username')
 ?>

<div class="col-lg-15">
  <h2>FORM </h2>
  <hr>

  <?= form_open_multipart($form_action) ?>
  <?= isset($input->id_foto) ? form_hidden('id_foto', $input->id_foto) : '' ?>

  <p class="col-lg-7">
    <?= form_label('Diupload Oleh : ', 'id_user') ?>
    <input type="hidden" name="id_user" value="<?= $ids ?>">
    <input type="text" name="" class="form-control" placeholder="<?= $username ?>" readonly>
    <?= form_error('id_user','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Tanggal Upload : ', 'tanggal_upload') ?>
    <input type="text" name="tanggal_upload" value="<?= date('Y-m-d') ?>" readonly class="form-control">
    <?= form_error('tanggal_upload','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Judul : ', 'judul') ?>
    <?= form_input('judul', $input->judul, ['class' => 'form-control']) ?>
    <?= form_error('judul','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Caption  : ', 'caption') ?>
    <?= form_textarea('caption', $input->caption, ['class' => 'form-control']) ?>
    <?= form_error('caption','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Foto  : ', 'foto') ?>
    <?= form_upload('foto') ?>
    <?= form_error('foto','<p class="alert alert-danger col-lg-5">') ?>
  </p>

  <div class="col-lg-7">
    <?= form_button(['type' => 'submit', 'content' => 'Simpan', 'class' => 'btn btn-primary', 'style' => 'float:right; margin-top:10px']) ?>
  </div>
  <?php if(!empty($input->foto)) : ?>
    <p class="col-lg-7">
      <img src="<?= site_url("/gambar/$input->foto") ?>" alt="<?= $input->id_foto ?>" style="width:70%">
    </p>
  <?php endif ?>
</div>

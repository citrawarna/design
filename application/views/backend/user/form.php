

<div class="col-lg-12">
  <h2>FORM </h2>
  <hr>

  <?= form_open($form_action) ?>
  <?= isset($input->id_user) ? form_hidden('id_user', $input->id_user) : '' ?>
  <p class="col-lg-7">
    <?= form_label('Nama Lengkap : ', 'nama_user') ?>
    <?= form_input('nama_user', $input->nama_user, ['class' => 'form-control']) ?>
    <?= form_error('nama_user','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Username : ', 'username') ?>
    <?= form_input('username', $input->username, ['class' => 'form-control']) ?>
    <?= form_error('username','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Password : ', 'password') ?>
    <?= form_password('password', $input->password, ['class' => 'form-control']) ?>
    <?= form_error('password','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Tempat Lahir : ', 'tempat_lahir') ?>
    <?= form_input('tempat_lahir', $input->tempat_lahir, ['class' => 'form-control']) ?>
    <?= form_error('tempat_lahir','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Tanggal Lahir : ', 'tanggal_lahir') ?>
    <?= form_input('tanggal_lahir', $input->tanggal_lahir, ['class' => 'form-control', 'id' => 'datepicker', 'placeholder' => 'YYYY/MM/DD']) ?>
    <?= form_error('tanggal_lahir','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Jenis Kelamin : ', 'jenis_kelamin') ?><br>
    <?= form_radio('jenis_kelamin', 'Laki - Laki', isset($input->jenis_kelamin) && ($input->jenis_kelamin == 'Laki - Laki') ? true : false) ?>
    Laki - Laki
    <?= form_radio('jenis_kelamin', 'Perempuan', isset($input->jenis_kelamin) && ($input->jenis_kelamin == 'Perempuan') ? true : false) ?>
    Perempuan
    <?= form_error('jenis_kelamin','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('No. Telp : ', 'no_telp') ?>
    <?= form_input('no_telp', $input->no_telp, ['class' => 'form-control']) ?>
    <?= form_error('no_telp','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Alamat : ', 'alamat') ?>
    <?= form_input('alamat', $input->alamat, ['class' => 'form-control']) ?>
    <?= form_error('alamat','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <p class="col-lg-7">
    <?= form_label('Level : ', 'level') ?><br>
    <?= form_radio('level', 'admin', isset($input->level) && ($input->level == 'admin') ? true : false) ?>
    Admin
    <?= form_radio('level', 'operator', isset($input->level) && ($input->level == 'operator') ? true : false) ?>
    Operator
    <?= form_error('level','<p class="alert alert-danger col-lg-5">') ?>
  </p>
  <div class="col-lg-7">
    <?= form_button(['type' => 'submit', 'content' => 'Simpan', 'class' => 'btn btn-primary', 'style' => 'float:right; margin-top:10px']) ?>
  </div>

</div>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrator BMS</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
  </head>
  <body style="background-color:#f2f2f2;">
    <div class="container" style="width:30%; background-color:white; border-radius:10px; box-shadow: 1px 5px 15px #888888; margin-top:150px;">
      <h1><center>FORM LOGIN</center></h1>
      <?= form_open('login', ['name' => 'form_login']) ?>
      <?php if(!empty($this->session->flashdata('error'))) : ?>
        <p>
          <?= $this->session->flashdata('error') ?>
        </p>
      <?php endif ?>
      <p class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <?= form_label('', 'username') ?>
        <?= form_input('username', $input->username, ['class' => 'form-control', 'placeholder' => 'USERNAME']) ?>
      </p>
      <?= form_error('username', '<p class="alert alert-danger">', '</p>'); ?>

      <p class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <?= form_label('', 'password') ?>
        <?= form_password('password', $input->password, ['class' => 'form-control', 'placeholder' => 'PASSWORD']) ?>
      </p>
      <?= form_error('password', '<p class="alert alert-danger">', '</p>'); ?>

      <p>
        <input type="submit" name="submit" id="submit" value="LOGIN" class="btn btn-primary">
      </p>
      <?php echo form_close() ?>
    </div>

  </body>
</html>

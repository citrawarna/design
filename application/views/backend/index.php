
<?php
  $is_login = $this->session->userdata('is_login');
  $username = $this->session->userdata('username');
 ?>

 <?php if($is_login) : ?>


<h3>DASHBOARD</h3>
<hr>
<p>Selamat datang dihalaman dashboard <strong><?= $username ?></strong>, silahkan menambah, mengedit / menghapus content di website anda.</p>
<?php endif ?>

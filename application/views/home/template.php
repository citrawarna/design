<!DOCTYPE HTML>
<html>
	<head>
		<title>Bali Massive Shuffle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
		<link rel="icon" href="<?= base_url('assets/images/bms-logo.jpg')?>">
		<noscript><link rel="stylesheet" href="<?= base_url('assets/css/noscript.css') ?>" /></noscript>
	</head>
  <body class="is-loading">
    <div id="wrapper" class="fade-in">
    <!-- Header and nav -->
      <?php $this->load->view('home/nav_menu') ?>

		<div id="main">
			<?php $this->load->view($main_view) ?>
			<h4 style="padding:40px"><center>- Tanyakan apa saja pada kami melalui form atau menghubungi kontak yang tersedia dibawah -</center></h4>
		</div>

    <!-- contact us -->
      <?php $this->load->view('home/contact_us') ?>

  <!-- Copyright footer -->

      <?php $this->load->view('home/footer') ?>

    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrollex.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.scrolly.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/skel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/util.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
  </body>
</html>

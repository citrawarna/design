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

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Welcome to<br />
						Bali massive shuffle</h1>
						<h2>official website</h2>

						<p>More than a Community, We are FAMILY
						<br> Melbourne Shuffle is Our Blood!
						<br>BIG STRONG ONE! </p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<?php $this->load->view('home/nav_menu') ?>
				<!-- Nav -->


				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">About Us</span>
									<h2><a href="<?= base_url('about') ?>">Bali Massive Shuffle
									</a></h2>
									<p style="text-align:justify">
										Bali massive shuffle atau yang biasa kita sebut BMS adalah komunitas shuffle terbesar di Bali dan masih berkomitment
										untuk terus membuat karya yang berkaitan dengan Melbourne Shuffle.
										BMS Pertama kali dibentuk pada tahun 2011 oleh Adi Wiradarma,
										pada saat itu shuffle dance masih sangat booming,
										Adi Wiradarma masuk ke dalam group di facebook yaitu "Indo Rockers" sebuah group shuffle terbesar di Indonesia
										yang membernya berada diseluruh Indonesia, dalam group tersebut ia bertemu dengan Eka Lasmana (Lus) dan Sigit yang kebetulan mereka
										berasal dari Pulau Bali, Akhirnya Mereka Ber-3 Memutuskan untuk melakukan meet up / pertemuan, dan membahas tentang
										shuffle dan perkembangannya di pulau Bali ini. Akhirnya Pada bulan Oktober 2011 Lahirlah Bali Massive Shuffle yang dipimpin oleh Adi Wiradarma</p>
								</header>
								<img src="<?= base_url('assets/images/pic01.jpg')?>" alt="" id="" class="image main" />
									<p style="text-align:justify">Membicarakan BMS tidak akan jauh dari yang namanya Melbourne Shuffle.
									Melbourne Shuffle (juga dikenal sebagai Rocking)
									 adalah tarian pesta dan rave yang berasal dari akhir 1980-an di scene musik rave bawah tanah
									 di Melbourne, Australia. Gerakan dasar dalam tarian ini adalah tindakan tumit dan kaki yang
									 cepat dengan gaya yang sesuai untuk berbagai jenis musik elektronik. Kebanyakan varian juga
									 menggabungkan gerakan lengan. Orang yang menari shuffle sering disebut sebagai "shuffler"
									 karena popularitas shuffle di awal 1990an.</p>
								<ul class="actions">
									<li><a href="<?= base_url('about') ?>" class="button big">Read More</a></li>
								</ul>
							</article>

						<!-- Posts -->
						<h3 style="padding:40px; text-align:center;">Our Latest Videos</h3>
							<section class="posts">
								<?php if($videos) : ?>
									<?php foreach($videos as $row) : ?>
								<article>
									<header>
										<span class="date"><?= $row->tanggal_upload ?></span>
										<h2><?= anchor("video/detail/$row->id_video", $row->judul) ?></h2>
									</header>
									<div class="image fit"><?php
										echo str_replace('<iframe width="560" height="315" ', '<iframe width="450" height="253"', html_entity_decode($row->link_video));
									 ?></div>

								</article>
							<?php endforeach ?>
						<?php endif ?>
							</section>
							<ul class="actions"  style="padding:40px;">
								<center><li><a href="<?= base_url('video') ?>" class="button">Click here to see more videos</a></li></center>
							</ul>

						<!-- Footer -->

						<h4 style="padding:40px"><center> - Tanyakan apa saja pada kami melalui form atau menghubungi kontak yang tersedia dibawah -</center></h4>
					</div>

					<!-- contact us -->
				<?php $this->load->view('home/contact_us') ?>

				<!-- Copyright footer -->

				<?php $this->load->view('home/footer') ?>

			</div>

		<!-- Scripts -->
			<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
			<script src="<?= base_url('assets/js/jquery.scrollex.min.js') ?>"></script>
			<script src="<?= base_url('assets/js/jquery.scrolly.min.js') ?>"></script>
			<script src="<?= base_url('assets/js/skel.min.js') ?>"></script>
			<script src="<?= base_url('assets/js/util.js') ?>"></script>
			<script src="<?= base_url('assets/js/main.js') ?>"></script>

	</body>
</html>

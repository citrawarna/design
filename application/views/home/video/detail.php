<section class="post">
	<header class="major">
		<span class="date"><?= $data->tanggal_upload ?></span>
			<h1><?= $data->judul ?></h1>
	</header>
		<div class="image main"><center><?= str_replace('<iframe width="560" height="315" ',
    '<iframe width="100%" height="500px;"',  html_entity_decode($data->link_video)) ?>
    </center></div>
			<p><?= $data->caption ?></p>
</section>

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

<!-- pagination -->
<style media="screen">
  #pagination a, #pagination strong {

      margin: 0 2px;
      color: #000000;
  }
  #pagination a {
      text-decoration:none;
      border:1px solid black;
      background-color:white;
      padding:10px 12px;
  }
  #pagination a:hover {
      background-color:white;
      border:1px solid #96dad1;
  }
  #pagination strong {
      padding:11px 14px;
      border:1px solid #96dad1;
      background-color:#eeeeee;
  }
</style>
<footer>
			<div id="pagination">
        <?= $pagination ?>
			</div>
</footer>

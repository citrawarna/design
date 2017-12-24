<div class="box alt">
  <div class="row 50% uniform">
    <?php if($photos) : ?>
      <?php foreach($photos as $row) : ?>
    <div class="4u"><span class="image fit"><a href='<?=base_url("photo/detail/$row->id_foto") ?>'><img src="<?= site_url("gambar/$row->foto") ?>" alt="<?= $row->foto ?>" ></a></span></div>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</div>
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

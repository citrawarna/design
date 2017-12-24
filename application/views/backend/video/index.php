<br>
<?= anchor('data_video/tambah', 'Tambah Video', ['class' => 'btn btn-primary']) ?>
<div class="col-lg-12">
    <?php $this->load->view('backend/_partial/flash_message') ?>
</div>
<br><br>
  <table class="table">
  <?php if($videos) : ?>
    <?php foreach($videos as $row) : ?>
  <tr>
    <td>No</td>
    <td><?= $no++ ?></td>
  </tr>
  <tr>
    <td>Tanggal Upload</td>
    <td><?= $row->tanggal_upload  ?></td>
  </tr>
  <tr>
    <td>di Upload Oleh</td>
    <td><?= $row->nama_user ?></td>
  </tr>
  <tr>
    <td>Judul</td>
    <td><?= $row->judul ?></td>
  </tr>
  <tr>
    <td>Video</td>
    <td><?= html_entity_decode($row->link_video) ?></td>
  </tr>
  <tr>
    <td>Caption</td>
    <td><?= $row->caption ?></td>
  </tr>
  <tr>
    <td>Action </td>
    <td><?= anchor("data_video/edit/$row->id_video", '<span class="glyphicon glyphicon-cog"></span>', ['class' => 'btn btn-info']) ?>
      | <?= anchor("data_video/delete/$row->id_video", '<div class="btn btn-danger glyphicon glyphicon-trash"> </div>', ['onclick' => "return confirm('Yakin akan hapus data? Data yg sudah terhapus tidak dapat dikembalikan')"] ) ?>
    </td>
  </tr>
  <!-- pemisah -->
  <tr>
    <td style="background-color:none; height:70px" colspan="2" ></td>

  </tr>
    <?php  endforeach ?>
  <?php endif ?>

  </table>

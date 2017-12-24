<br>
<?= anchor('data_foto/tambah', 'Tambah Foto', ['class' => 'btn btn-primary']) ?>
<div class="col-lg-12">
    <?php $this->load->view('backend/_partial/flash_message') ?>
</div>
<br><br>
<table class="table table-striped">
  <?php if ($fotos) : ?>
  <tr>
    <th>No</th>
    <th>Yang Upload</th>
    <th>Tanggal</th>
    <th>Judul</th>
    <th>Caption</th>
    <th>Foto</th>
    <th colspan="2"><center>Action</center></th>
  </tr>
  <?php foreach ($fotos as $row) : ?>
  <tr>

      <td><?= $no++ ?></td>
      <td><?= $row->nama_user ?></td>
      <td style="width:100px"><?= $row->tanggal_upload ?></td>
      <td><?= $row->judul ?></td>
      <td style="width:350px;"><?= $row->caption ?></td>
      <td ><?php if(!empty($row->foto)) : ?>
        <img src="<?= site_url("gambar/$row->foto") ?>" alt="<?= $row->foto ?>" style="width:150px;">
      <?php else : ?>
        <img src="<?= site_url("gambar/no_photo.jpg") ?>" alt="no photo" style="width:150px;">
      <?php endif ?></td>

      <td><?= anchor("data_foto/edit/$row->id_foto", '<span class="glyphicon glyphicon-cog"></span>', ['class' => 'btn btn-info']) ?></td>
      <td>
        <?= anchor("data_foto/delete/$row->id_foto", '<div class="btn btn-danger glyphicon glyphicon-trash"> </div>', ['onclick' => "return confirm('Yakin akan hapus data? Data yg sudah terhapus tidak dapat dikembalikan')"] ) ?>
        <?= form_hidden("id_foto", $row->id_foto) ?>
      </td>
  </tr>
  <?php endforeach ?>
  <?php endif ?>
</table>

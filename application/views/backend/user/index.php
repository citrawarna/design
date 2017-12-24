<br>
<?= anchor('user/tambah', 'Tambah User', ['class' => 'btn btn-primary']) ?>
<div class="col-lg-12">
    <?php $this->load->view('backend/_partial/flash_message') ?>
</div>

<br><br>
<table class="table table-striped">
  <div class="">
    <?php if ($users) : ?>
    <tr class="active">
      <th>No</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>No. Telp</th>
      <th>Alamat</th>
      <th>Level</th>
      <th colspan="2">ACTION</th>
    </tr>
    <?php foreach($users as $row) : ?>

      <td><?= $no++ ?></td>
      <td><?= $row->nama_user ?></td>
      <td><?= $row->username ?></td>
      <td>******</td>
      <td><?= $row->tempat_lahir ?>, <?= $row->tanggal_lahir ?></td>
      <td><?= $row->jenis_kelamin ?></td>
      <td><?= $row->no_telp ?></td>
      <td><?= $row->alamat ?></td>
      <td><?= $row->level ?></td>
      <td><?= anchor("user/edit/$row->id_user", '<span class="glyphicon glyphicon-cog"></span>', ['class' => 'btn btn-info']) ?></td>
      <td>
        <?= anchor("user/delete/$row->id_user", '<div class="btn btn-danger glyphicon glyphicon-trash"> </div>', ['onclick' => "return confirm('Yakin akan hapus data? Data yg sudah terhapus tidak dapat dikembalikan')"] ) ?>
        <?= form_hidden("id_user", $row->id_user) ?>
      </td>
    </tr>
  <?php endforeach ?>
<?php endif ?>
  </div>

</table>

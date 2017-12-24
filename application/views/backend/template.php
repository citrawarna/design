<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Bali Massive Shuffle</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/js/jquery-ui.css') ?>">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-1.12.4.js') ?>">  </script>
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-ui.js'); ?>"> </script>
    <script>
    $( function() {
    $("#datepicker").datepicker( {
      changeMonth: true,
      changeYear: true,
      yearRange : '1980:+0',
      dateFormat: "yy-mm-dd"
    });
     } );
      </script>

  </head>
  <body id="">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php $this->load->view('backend/sidebar') ?>
    </nav>
    <div class="col-lg-9" style="margin-left:230px;">
      <?php $this->load->view($main_view) ?>
    </div><br>
    <div class="">
      <?php $this->load->view('backend/footer') ?>
    </div>

  </body>
</html>

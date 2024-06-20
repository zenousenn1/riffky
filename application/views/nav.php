<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CI3</title>
  <!-- Load the CodeIgniter URL helper -->
  <?php $this->load->helper('url'); ?>
</head>
<body>
  <div style=" padding: 20px 30px; margin: 10px 10px; border-radius: 15px">
    <nav class="container1" style="background: linear-gradient(to right, #00fff7fe, #ffffff00);">
      <div class="container2 mt-4">
        <a style="color: #ffffff; font-size:60px; margin:10px 10px">GUDANG BERAS</a>
      </div>
    </nav>
    <br> <br> <br> <br>
    <div style="float: right;">
      <a href="<?php echo base_url('gudang/tambah'); ?>" style="margin-right: 15px;">Input data</a>
      <a href="<?php echo base_url('gudang/index'); ?>" style="margin-right: 15px;">olah data</a>
    </div>
    <br><hr>
  </div>
</body>
</html>

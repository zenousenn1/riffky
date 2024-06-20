<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 900px;
            max-width: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .tb {
            width: 50%; 
            margin: 0 auto; 
            text-align: left; 
        }
        .tb input[type="text"],
        .tb input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php $this->load->view('nav'); ?>
        <center><h1>Tambah Barang</h1></center>
        <?php echo validation_errors(); ?>
        <?php echo form_open('gudang/tambah'); ?>
        <div class="tb">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"><br>
            <label>Alamat pengirim:</label>
            <input type="text" name="lokasi" value="<?php echo set_value('lokasi'); ?>"><br>
            <label>Kapasitas/kg:</label>
            <input type="text" name="kapasitas" value="<?php echo set_value('kapasitas'); ?>"><br>
            <input type="submit" value="Simpan">
        </div>
        <?php echo form_close(); ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>
<body>
    <h1>Konfirmasi Hapus</h1>
    <p>Apakah Anda yakin ingin menghapus ini?</p>
    <a href="<?php echo base_url('gudang/hapus/' . $gudang['id']); ?>">Ya</a>
    <a href="<?php echo base_url('gudang'); ?>">Tidak</a>
</body>
</html>

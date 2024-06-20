<!DOCTYPE html>
<html>
<head>
    <title>Daftar Gudang</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php $this->load->view('nav'); ?>
        
        <table>
            <tr>
                <th>ID</th> <!-- Tambah kolom ID -->
                <th>Nama</th>
                <th>Alamat Pengirim</th>
                <th>Kapasitas/kg</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($gudang as $g) { ?>
            <tr>
                <td><?php echo $g['id']; ?></td> <!-- Tampilkan ID -->
                <td><?php echo $g['nama']; ?></td>
                <td><?php echo $g['lokasi']; ?></td>
                <td><?php echo $g['kapasitas']; ?></td>
                <td>
                    <a href="<?php echo base_url('gudang/edit/' . $g['id']); ?>">Edit</a> |
                    <a href="<?php echo base_url('gudang/hapus/' . $g['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

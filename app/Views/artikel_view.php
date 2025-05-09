<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA ARTIKEL</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        .container {
            max-width: auto;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        a.button {
            display: inline-block;
            background-color:rgb(43, 32, 194);
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        a.button:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .aksi a {
            margin-right: 10px;
            color:rgb(238, 237, 238);
            text-decoration: none;
        }

        .aksi a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>MANAGEMENT ARTIKEL BERITA</h2>
        <h3>By : Wahyu Eko Suroso</h3>
        <a class="button" href="<?= site_url('artikel/tambah') ?>">+ Tambah Data</a>
        <table>
            <tr>
                <th>id</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Isi</th>
                <th>tanggal_publikasi</th>
                <th>Status</th>
                <th>Author</th>
                <th>meta_deskripsi</th>
                <th>kata_kunci</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>deleted_at</th>
            </tr>
            <?php if (!empty($artikel)): ?>
                <?php foreach ($artikel as $b): ?>
                <tr>
                    <td><?= esc($b['id']) ?></td>
                    <td><?= esc($b['judul']) ?></td>
                    <td><?= esc($b['slug']) ?></td>
                    <td><?= esc($b['isi']) ?></td>
                    <td><?= esc($b['tanggal_publikasi']) ?></td>
                    <td><?= esc($b['status']) ?></td>
                    <td><?= esc($b['author']) ?></td>
                    <td><?= esc($b['meta_deskripsi']) ?></td>
                    <td><?= esc($b['kata_kunci']) ?></td>
                    <td><?= esc($b['created_at']) ?></td>
                    <td><?= esc($b['updated_at']) ?></td>
                    <td><?= esc($b['deleted_at']) ?></td>
                    <td class="aksi">
                        <a class="button" href="<?= site_url('artikel/edit/' . $b['id']) ?>">Edit</a>
                        <a class="button" href="<?=  site_url('artikel/hapus/' . $b['id']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6">Belum ada data.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

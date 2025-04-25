<!DOCTYPE html>
<html>
<head>
    <title>Data Biodata</title>
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
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        a.button {
            display: inline-block;
            background-color: #28a745;
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
            color: #007bff;
            text-decoration: none;
        }

        .aksi a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Biodata</h2>
        <a class="button" href="<?= site_url('biodata/tambah') ?>">+ Tambah Data</a>
        <table>
            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Keahlian</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
            <?php if (!empty($biodata)): ?>
                <?php foreach ($biodata as $b): ?>
                <tr>
                    <td><?= esc($b['nama']) ?></td>
                    <td><?= esc($b['jurusan']) ?></td>
                    <td><?= esc($b['keahlian']) ?></td>
                    <td><?= esc($b['alamat']) ?></td>
                    <td><?= esc($b['nomor_telepon']) ?></td>
                    <td class="aksi">
                        <a href="<?= site_url('biodata/edit/' . $b['id']) ?>">Edit</a>
                        <a href="<?= site_url('biodata/hapus/' . $b['id']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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

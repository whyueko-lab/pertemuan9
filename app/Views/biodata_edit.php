<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Biodata</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f8;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #ffc107;
            color: #000;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e0a800;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #555;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Biodata</h2>
        <form action="<?= site_url('biodata/update/' . $biodata['id']) ?>" method="post">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= esc($biodata['nama']) ?>" required>

            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="<?= esc($biodata['jurusan']) ?>" required>

            <label>Keahlian:</label>
            <input type="text" name="keahlian" value="<?= esc($biodata['keahlian']) ?>" required>

            <label>Alamat:</label>
            <textarea name="alamat" required><?= esc($biodata['alamat']) ?></textarea>

            <label>Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" value="<?= esc($biodata['nomor_telepon']) ?>" required>

            <button type="submit">Update</button>
            <a href="<?= site_url('biodata') ?>">← Kembali</a>
        </form>
    </div>
</body>
</html>

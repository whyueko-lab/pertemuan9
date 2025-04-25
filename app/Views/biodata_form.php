<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Biodata</title>
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
            background-color: #007bff;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
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
        <h2>Tambah Data Biodata</h2>
        <form action="<?= site_url('biodata/simpan') ?>" method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Jurusan:</label>
            <input type="text" name="jurusan" required>

            <label>Keahlian:</label>
            <input type="text" name="keahlian" required>

            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>

            <label>Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" required>

            <button type="submit">Simpan</button>
            <a href="<?= site_url('biodata') ?>">← Kembali</a>
        </form>
    </div>
</body>
</html>

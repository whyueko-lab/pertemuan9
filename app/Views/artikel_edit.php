<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Artikel</title>
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
        <h2>Edit Data artikel</h2>
        <form action="<?= site_url('artikel/update/' . $artikel['id']) ?>" method="post">
            <label>ID</label>
            <input type="text" name="id" value="<?= $artikel['id'] ?>" readonly>

            <label>Judul</label>
            <input type="text" name="judul" value="<?= $artikel['judul'] ?>" required>

            <label>Isi</label>
            <textarea name="isi" rows="5" required><?= $artikel['isi'] ?></textarea>

            <label>Slug</label>
            <input type="text" name="slug" value="<?= $artikel['slug'] ?>" required>

            <label>Status</label>
            <input type="text" name="status" value="<?= $artikel['status'] ?>" required>

            <label>Author</label>
            <input type="text" name="author" value="<?= $artikel['author'] ?>" required>

            <label>Meta Deskripsi</label>
            <input type="text" name="meta_deskripsi" value="<?= $artikel['meta_deskripsi'] ?>" required>

            <label>Kata Kunci</label>
            <input type="text" name="kata_kunci" value="<?= $artikel['kata_kunci'] ?>" required>

            <label>Tanggal Publikasi</label>
            <input type="datetime-local" name="tanggal_publikasi" value="<?= $artikel['tanggal_publikasi'] ?>" required>

            <div>
                <label>Created At</label>
                <input type="datetime-local" name="created_at" required>
            </div>

            <div>
                <label>Updated At</label>
                 <input type="datetime-local" name="updated_at" required>
            </div>

            <div>
                <label>Deleted At</label>
                <input type="datetime-local" name="deleted_at" required>
            </div>    

            <button type="submit">Update</button>
            <a href="<?= site_url('artikel') ?>">← Kembali</a>
        </form>
    </div>
</body>
</html>

<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Edit Data Nilai mahasiswa</h1>
    
    <?php if (isset($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <form action="/nilai-mahasiswa/update/<?= $mahasiswa['no_id'] ?>" method="post">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>" required>
        <div class="mb-3">
            <label for="nm_mahasiswa" class="form-label">Nama mahasiswa</label>
            <input type="text" class="form-control" id="nm_mahasiswa" name="nm_mahasiswa" value="<?= $mahasiswa['nm_mahasiswa'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="absen" class="form-label">Nilai Absen</label>
            <input type="number" class="form-control" id="absen" name="absen" min="0" max="100" value="<?= $mahasiswa['absen'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="uts" class="form-label">Nilai UTS</label>
            <input type="number" class="form-control" id="uts" name="uts" min="0" max="100" value="<?= $mahasiswa['uts'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tugas" class="form-label">Nilai Tugas</label>
            <input type="number" class="form-control" id="tugas" name="tugas" min="0" max="100" value="<?= $mahasiswa['tugas'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="uas" class="form-label">Nilai UAS</label>
            <input type="number" class="form-control" id="uas" name="uas" min="0" max="100" value="<?= $mahasiswa['uas'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/nilai-mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
<?= $this->endSection() ?>
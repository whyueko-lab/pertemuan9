<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Tambahkan Data Nilai Siswa</h1>

<?php if (isset($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="/nilai-siswa/store" method="post">
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="nis" name="nis" required>
    </div>
    <div class="mb-3">
        <label for="nm_siswa" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" required>
    </div>
    <div class="mb-3">
        <label for="absen" class="form-label">Nilai Absen</label>
        <input type="number" class="form-control" id="absen" name="absen" min="0" max="100" required>
    </div>
    <div class="mb-3">
        <label for="uts" class="form-label">Nilai UTS</label>
        <input type="number" class="form-control" id="uts" name="uts" min="0" max="100" required>
    </div>
    <div class="mb-3">
        <label for="tugas" class="form-label">Nilai Tugas</label>
        <input type="number" class="form-control" id="tugas" name="tugas" min="0" max="100" required>
    </div>
    <div class="mb-3">
        <label for="uas" class="form-label">Nilai UAS</label>
        <input type="number" class="form-control" id="uas" name="uas" min="0" max="100" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/nilai-siswa" class="btn btn-secondary">Kembali</a>
</form>
<?= $this->endSection() ?>
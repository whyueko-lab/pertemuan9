<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Daftar Nilai Siswa</h1>
    
    <a href="/nilai-siswa/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Absen</th>
                <th>UTS</th>
                <th>Tugas</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $item): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $item['nis'] ?></td>
                <td><?= $item['nm_siswa'] ?></td>
                <td><?= $item['absen'] ?></td>
                <td><?= $item['uts'] ?></td>
                <td><?= $item['tugas'] ?></td>
                <td><?= $item['uas'] ?></td>
                <td><?= $item['nilai_akhir'] ?></td>
                <td><?= $item['grade'] ?></td>
                <td>
                    <a href="/nilai-siswa/edit/<?= $item['no_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/nilai-siswa/delete/<?= $item['no_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>
    <h1 class="mb-4">Daftar Nilai mahasiswa</h1>
    
    <a href="/nilai-mahasiswa/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>nim</th>
                <th>Nama mahasiswa</th>
                <th>Absen</th>
                <th>UTS</th>
                <th>Tugas</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $key => $item): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $item['nim'] ?></td>
                <td><?= $item['nm_mahasiswa'] ?></td>
                <td><?= $item['absen'] ?></td>
                <td><?= $item['uts'] ?></td>
                <td><?= $item['tugas'] ?></td>
                <td><?= $item['uas'] ?></td>
                <td>
                    <?php
                        $nilai_akhir = ($item['absen'] + $item['uts'] + $item['tugas'] + $item['uas']) / 4;
                        echo number_format($nilai_akhir, 2);
                    ?>
                </td>
                    <a href="/nilai-mahasiswa/edit/<?= $item['no_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/nilai-mahasiswa/delete/<?= $item['no_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>
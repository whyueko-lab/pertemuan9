<div class="container pt-5">
    <a href="<?= base_url('data-diri/tambah');?>" class="btn btn-primary mb-2">Tambah Data Diri</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Diri</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Keahlian</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach ($getDataDiri as $data){?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['jurusan']; ?></td>
                                <td><?= $data['keahlian']; ?></td>
                                <td><?= $data['alamat']; ?></td>
                                <td><?= $data['nomor_telepon']; ?></td>
                                <td>
                                    <a href="<?= base_url('data-diri/edit/'.$data['id_data_diri']);?>" 
                                    class="btn btn-warning">
                                    Edit</a>
                                    <a href="<?= base_url('data-diri/hapus/'.$data['id_data_diri']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data diri ini ?')" 
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                            </tr>  
                        <?php $no++;}?>    
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
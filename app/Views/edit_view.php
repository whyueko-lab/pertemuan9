<div class="container p-5">
    <a href="<?= base_url('data-diri');?>" class="btn btn-primary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Data Diri : <?= $data_diri->nama;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('data-diri/update');?>">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" value="<?= $data_diri->nama;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <input type="text" value="<?= $data_diri->jurusan;?>" name="jurusan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keahlian</label>
                    <input type="text" value="<?= $data_diri->keahlian;?>" name="keahlian" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $data_diri->alamat;?>" name="alamat" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" value="<?= $data_diri->nomor_telepon;?>" name="nomor_telepon" required class="form-control">
                </div>
                <input type="hidden" value="<?= $data_diri->id_data_diri;?>" name="id_data_diri">
                <button class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
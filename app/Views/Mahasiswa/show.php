<?= $this->include('templates/header') ?>

<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6"><?= $title ?></h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">nim</label>
            <p class="text-gray-900"><?= $mahasiswa['nim'] ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama mahasiswa</label>
            <p class="text-gray-900"><?= $mahasiswa['nm_mahasiswa'] ?></p>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Absen</label>
                <p class="text-gray-900"><?= $mahasiswa['absen'] ?></p>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai UTS</label>
                <p class="text-gray-900"><?= $mahasiswa['uts'] ?></p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Tugas</label>
                <p class="text-gray-900"><?= $mahasiswa['tugas'] ?></p>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai UAS</label>
                <p class="text-gray-900"><?= $mahasiswa['uas'] ?></p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Akhir</label>
                <p class="text-gray-900 font-bold"><?= $mahasiswa['nilai_akhir'] ?></p>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <a href="<?= site_url('/mahasiswa/edit/' . $mahasiswa['no_id']) ?>"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Edit
            </a>
            <a href="<?= site_url('/mahasiswa') ?>"
                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</div>
<?= $this->include('templates/footer') ?>
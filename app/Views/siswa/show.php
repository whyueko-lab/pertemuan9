<?= $this->include('templates/header') ?>

<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6"><?= $title ?></h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">NIS</label>
            <p class="text-gray-900"><?= $siswa['nis'] ?></p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nama Siswa</label>
            <p class="text-gray-900"><?= $siswa['nm_siswa'] ?></p>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Absen</label>
                <p class="text-gray-900"><?= $siswa['absen'] ?></p>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai UTS</label>
                <p class="text-gray-900"><?= $siswa['uts'] ?></p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Tugas</label>
                <p class="text-gray-900"><?= $siswa['tugas'] ?></p>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai UAS</label>
                <p class="text-gray-900"><?= $siswa['uas'] ?></p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Nilai Akhir</label>
                <p class="text-gray-900 font-bold"><?= $siswa['nilai_akhir'] ?></p>
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">Grade</label>
                <span class="px-2 py-1 rounded-full 
                    <?= $siswa['grade'] == 'A' ? 'bg-green-200 text-green-800' : '' ?>
                    <?= $siswa['grade'] == 'B' ? 'bg-blue-200 text-blue-800' : '' ?>
                    <?= $siswa['grade'] == 'C' ? 'bg-yellow-200 text-yellow-800' : '' ?>
                    <?= $siswa['grade'] == 'D' ? 'bg-orange-200 text-orange-800' : '' ?>
                    <?= $siswa['grade'] == 'E' ? 'bg-red-200 text-red-800' : '' ?>
                ">
                    <?= $siswa['grade'] ?>
                </span>
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">Status</label>
            <span class="px-2 py-1 rounded-full 
                <?= $siswa['status'] == 'Lulus' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' ?>
            ">
                <?= $siswa['status'] ?>
            </span>
        </div>

        <div class="flex items-center justify-between">
            <a href="<?= site_url('/siswa/edit/' . $siswa['no_id']) ?>"
                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Edit
            </a>
            <a href="<?= site_url('/siswa') ?>"
                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                Kembali ke Daftar
            </a>
        </div>
    </div>
</div>

<?= $this->include('templates/footer') ?>
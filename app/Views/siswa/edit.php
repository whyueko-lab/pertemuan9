<?= $this->include('templates/header') ?>

<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6"><?= $title ?></h1>

    <form action="<?= site_url('/siswa/update/' . $siswa['no_id']) ?>" method="post">
        <input type="hidden" name="_method" value="PUT">

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <input type="hidden" name="current_nis" value="<?= $siswa['nis'] ?>">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nis">
                    NIS
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?= session('errors.nis') ? 'border-red-500' : '' ?>"
                    id="nis" name="nis" type="text" placeholder="Masukkan NIS"
                    value="<?= old('nis', $siswa['nis'] ?? '') ?>">
                <?php if (session('errors.nis')): ?>
                    <p class="text-red-500 text-xs italic"><?= session('errors.nis') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nm_siswa">
                    Nama Siswa
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nm_siswa" name="nm_siswa" type="text" placeholder="Masukkan Nama Siswa"
                    value="<?= old('nm_siswa', $siswa['nm_siswa']) ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="absen">
                    Nilai Absen
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="absen" name="absen" type="number" min="0" max="100" placeholder="0-100"
                    value="<?= old('absen', $siswa['absen']) ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="uts">
                    Nilai UTS
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="uts" name="uts" type="number" min="0" max="100" placeholder="0-100"
                    value="<?= old('uts', $siswa['uts']) ?>">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tugas">
                    Nilai Tugas
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="tugas" name="tugas" type="number" min="0" max="100" placeholder="0-100"
                    value="<?= old('tugas', $siswa['tugas']) ?>">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="uas">
                    Nilai UAS
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="uas" name="uas" type="number" min="0" max="100" placeholder="0-100"
                    value="<?= old('uas', $siswa['uas']) ?>">
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Update
                </button>
                <a href="<?= site_url('/siswa') ?>"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Kembali
                </a>
            </div>
        </div>
    </form>
</div>

<?= $this->include('templates/footer') ?>
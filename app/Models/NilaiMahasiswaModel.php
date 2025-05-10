<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiMahasiswaModel extends Model
{
    protected $table = 'nilai_mahasiswa';
    protected $primaryKey = 'no_id';
    protected $allowedFields = ['nim', 'nm_mahasiswa', 'absen', 'uts', 'tugas', 'uas', 'nilai_akhir'];
    protected $useAutoIncrement = true;

    protected $beforeInsert = ['calculateValues'];
    protected $beforeUpdate = ['calculateValues'];

    protected function calculateValues(array $data)
    {
        if (isset($data['data']['absen'])) {
            $absen = $data['data']['absen'];
            $uts = $data['data']['uts'];
            $tugas = $data['data']['tugas'];
            $uas = $data['data']['uas'];

            // Hitung nilai akhir
            $nilai_akhir = ($absen + $uts + $tugas + $uas) / 4;
            $data['data']['nilai_akhir'] = $nilai_akhir;
        }

        return $data;
    }

    public function isNimUnique($nim, $excludeId = null)
    {
        $builder = $this->builder();
        $builder->where('nim', $nim);

        if ($excludeId) {
            $builder->where('no_id !=', $excludeId);
        }

        return $builder->countAllResults() === 0;
    }
}

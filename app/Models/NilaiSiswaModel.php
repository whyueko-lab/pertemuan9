<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiSiswaModel extends Model
{
    protected $table = 'nilai_Siswa';
    protected $primaryKey = 'no_id';
    protected $allowedFields = ['nis', 'nm_siswa', 'absen', 'uts', 'tugas', 'uas', 'nilai_akhir', 'grade', 'status'];
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

            // Tentukan grade
            if ($nilai_akhir >= 80) {
                $grade = 'A';
            } elseif ($nilai_akhir >= 60) {
                $grade = 'B';
            } elseif ($nilai_akhir >= 50) {
                $grade = 'C';
            } elseif ($nilai_akhir >= 30) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }
            $data['data']['grade'] = $grade;

            // Tentukan status
            $data['data']['status'] = in_array($grade, ['D', 'E']) ? 'Mengulang' : 'Lulus';
        }

        return $data;
    }

    public function isNisUnique($nis, $excludeId = null)
    {
        $builder = $this->builder();
        $builder->where('nis', $nis);

        if ($excludeId) {
            $builder->where('no_id !=', $excludeId);
        }

        return $builder->countAllResults() === 0;
    }
}
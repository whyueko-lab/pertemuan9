<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'Judul', 'Slug', 'Isi', 'tanggal_publikasi', 'Status', 'Author', 'meta_deskripsi', 'kata_kunci', 'created_at', 'updated_at', 'deleted_at'];
}

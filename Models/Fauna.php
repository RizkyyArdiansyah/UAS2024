<?php

namespace App\Models;

use CodeIgniter\Model;

class Fauna extends Model
{
    protected $table = 'fauna'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'kategori', 'deskripsi', 'lat', 'lon', 'img']; // Sesuaikan dengan nama-nama kolom di tabel fauna
}

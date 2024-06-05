<?php

namespace App\Models;

use CodeIgniter\Model;

class Flora extends Model
{
    protected $table = 'flora'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'kategori', 'deskripsi', 'lat', 'lon', 'img']; // Sesuaikan dengan nama-nama kolom di tabel flora
}

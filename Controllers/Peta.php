<?php

namespace App\Controllers;

use App\Models\Flora;
use App\Models\Fauna;

class Peta extends BaseController
{
    public function index(): string
    {
        // Ambil data flora
        $floraModel = new Flora();
        $data['flora'] = $floraModel->findAll();

        // Ambil data fauna
        $faunaModel = new Fauna();
        $data['fauna'] = $faunaModel->findAll();

        // Tampilkan data dalam view (web)
        return view('peta', $data);
    }
}

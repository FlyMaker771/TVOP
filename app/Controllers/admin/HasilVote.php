<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class HasilVote extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Admin Hasil Vote | TexasVoice",
            'header' => "Hasil Vote",
            'cardtitle' => "Statistik Hasil Vote",
            // 'inputtitle' => "Form Input Data Kandidat",
            // 'updatetitle' => "Form Update Data Kandidat",
            // 'deletetitle' => "Delete Data Kandidat",
        ];

        $data['page'] = view('admin/v_hasilvote', $data);

        echo view("admin/v_homepage", $data);
    }
}

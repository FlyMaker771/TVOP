<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class HasilVote extends BaseController
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentDateTime = date('Y-m-d H:i:s');
        if ($currentDateTime > session()->get('max_time')) {
            # code...
            echo view('v_habis');
        } else {
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
}

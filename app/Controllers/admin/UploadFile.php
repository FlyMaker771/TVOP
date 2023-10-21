<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class UploadFile extends BaseController
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
                'title' => "Admin Upload File | TexasVoice",
                'header' => "Upload Data Pengguna",
                'cardtitle' => "Upload File Data User",
                'inputtitle' => "Form Input Data Kandidat",
                'updatetitle' => "Form Update Data Kandidat",
                'deletetitle' => "Delete Data Kandidat",
            ];

            $data['page'] = view('admin/v_uploadfile', $data);

            echo view("admin/v_homepage", $data);
        }
    }
}

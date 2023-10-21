<?php

namespace App\Controllers\voters;

use App\Controllers\BaseController;
use App\Models\KandidatModel;

class Vote extends BaseController
{
    function __construct()
    {
        $this->kandidat = new KandidatModel();
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentDateTime = date('Y-m-d H:i:s');
        if ($currentDateTime > session()->get('max_time')) {
            # code...
            echo view('v_habis');
        } else {
            $data = ['title' => "Ini Vote"];

            $data['kandidat'] = $this->kandidat->getKandidat()->getResult();

            echo view("voters/v_vote", $data);
        }
    }
}

<?php

namespace App\Controllers\voters;

use App\Controllers\BaseController;

class Vote extends BaseController
{
    public function index()
    {
        $data = ['title' => "Ini Vote"];
        echo view("voters/v_vote", $data);
    }
}

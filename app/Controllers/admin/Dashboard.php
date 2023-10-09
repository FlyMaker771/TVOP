<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function __construct()
    {
        // $this->pengguna = new PenggunaModel();
        // $this->kandidat = new KandidatModel();
        if (session()->get('role') != "admin") {
            echo '<script>
            alert("Access Denied!");
            </script>';
            exit;
        }
    }

    public function index()
    {
        $data = [
            'title' => "Admin Dashboard | TexasVoice",
            'header' => "Dashboard",
        ];

        $data['page'] = view('admin/v_dashboard', $data);

        echo view("admin/v_homepage", $data);
    }
}

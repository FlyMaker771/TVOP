<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Login extends BaseController
{
    function __construct()
    {
        helper("form");
        $this->pengguna = new PenggunaModel();
    }

    public function index()
    {
        $data = [
            'tittle' => "Texas Voice Login"

        ];

        return view('v_login', $data);
    }

    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            # code...
            $rules = [
                'username' => 'required|min_length[5]|max_length[50]',
                'password' => 'required|min_length[5]|max_length[50]|validateUser[username,password]'
            ];
            $errors = [
                'password' => [
                    'validateUser' => "Username or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                # code...
                return view(
                    'v_login',
                    ["validation" => $this->validator]
                );
            } else {
                # code...
                $username = $this->request->getVar('username');

                $user = $this->pengguna->where('nama', $username)->first();

                $this->setUserSession($user);

                if ($user['role'] == "admin") {
                    return redirect()->to(base_url('admin/dashboard'));
                } elseif ($user['role'] == "voters") {
                    return redirect()->to(base_url('voters/vote'));
                }
            }
        }

        return view('v_login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id_akun' => $user['id_akun'],
            'nis' => $user['nis'],
            'nama' => $user['nama'],
            'tingkat' => $user['tingkat'],
            'kelas' => $user['kelas'],
            'username' => $user['username'],
            'password' => $user['password'],
            'status' => $user['status'],
            'max_time' => $user['max_time'],
            'role' => $user['role'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}

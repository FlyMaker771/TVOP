<?php

namespace Config;

use App\Models\PenggunaModel;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;
use \App\Validation\AuthRules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        // AuthRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    // public function validateUser(string $str, string $fields, array $data): bool
    // {
    //     [$usernameField, $passwordField] = explode(',', $fields);
    //     $username = $data[$usernameField];
    //     $password = $data[$passwordField];

    //     $model = new PenggunaModel();
    //     $user = $model->where('nama', $username)->first();

    //     if (!$user || !password_verify($password, $user['password'])) {
    //         return false; // Kombinasi username dan password tidak cocok
    //     }

    //     return true; // Kombinasi username dan password cocok
    // }
}

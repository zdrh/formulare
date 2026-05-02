<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'type' => 0
        ];
        echo view('main/index', $data);
    }
}

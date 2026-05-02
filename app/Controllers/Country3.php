<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Country as CountryModel;

use App\Libraries\StringLib;

class Country3 extends BaseController
{
    private CountryModel $countryModel;
    private StringLib $stringLib;
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        $this->type = 3;
        return parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $data = [
            'type' => $this->type
        ];
        echo view('country3/index', $data);
    }
}

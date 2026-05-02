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
        $this->countryModel = new CountryModel();
        $this->stringLib = new StringLib();
        $this->type = 3;
        return parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $countries = $this->countryModel->orderBy('name', 'asc')->findAll();
        $countries = $this->stringLib->cleanArray($countries, 'info');
        $data = [
            'type' => $this->type,
            'countries' => $countries
        ];
        echo view('country3/index', $data);
    }

    public function add()
    {
        $data = [
            'countries' => $this->countryModel->orderBy('name', 'asc')->findAll(),
            'type' => $this->type
        ];

        echo view('country3/add', $data);
    }

    public function create()
    {
        $name = $this->request->getPost('name');
        $short_name = $this->request->getPost('short_name');
        $description = $this->request->getPost('description');

        $data = [
            'name' => $name,
            'short_name' => $short_name,
            'info' => $description
        ];

        $this->countryModel->save($data);

        return redirect()->to('form-basic');
    }

      public function update()
    {
        $name = $this->request->getPost('name');
        $short_name = $this->request->getPost('short_name');
        $description = $this->request->getPost('description');
        $id = $this->request->getPost('id');
       
    
         $data = [
            'name' => $name,
            'short_name' => $short_name,
            'info' => $description,
            'id' => $id
        ];
       
        $this->countryModel->save($data);

        return redirect()->to('form-basic');
    }

    public function delete(int $id)
    {
        $this->countryModel->delete($id);

        return redirect()->to('form-basic');
    }
}

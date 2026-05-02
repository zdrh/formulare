<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RequestInterface;
use Psr\Log\LoggerInterface;

use App\Models\Country as CountryModel;

use App\Libraries\StringLib;




class Country extends BaseController
{
    private CountryModel $countryModel;
    private StringLib $stringLib;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        $this->countryModel = new CountryModel();
        $this->stringLib = new StringLib();
        return parent::initController($request, $response, $logger);
    }
    public function index()
    {

        $countries = $this->countryModel->orderBy('name', 'asc')->findAll();
        $countries = $this->stringLib->cleanArray($countries, 'info');
       
        $data = [
            'countries' => $countries,
        ];

        echo view('country/index', $data);
    }

    public function add()
    {
        $data = [
            'countries' => $this->countryModel->orderBy('name', 'asc')->findAll()
        ];

        echo view('country/add', $data);
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

    public function edit(int $id)
    {
        $country =  $this->countryModel->find($id);
        $data = [
            'country' => $country
            
        ];

        echo view('country/edit', $data);
    }

    public function update()
    {
        $name = $this->request->getPost('name');
        $short_name = $this->request->getPost('short_name');
        $description = $this->request->getPost('description');
        $id = $this->request->getPost('id');
        $action = $this->request->getPost('action');
    
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

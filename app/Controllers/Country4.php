<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\Country as CountryModel;

use App\Libraries\StringLib;

class Country4 extends BaseController
{
    private CountryModel $countryModel;
    private StringLib $stringLib;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        $this->countryModel = new CountryModel();
        $this->stringLib = new StringLib();
        $this->type = 4;
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
        echo view('country4/index', $data);
    }

    public function add()
    {
        $data = [
            'countries' => $this->countryModel->orderBy('name', 'asc')->findAll(),
            'type' => $this->type
        ];

        echo view('country4/add', $data);
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

        $result = $this->countryModel->save($data);
        if ($result) {
            service('alerts')->set('success', 'recordCreated');
        } else {
            service('alerts')->set('danger', 'recordCreated');
        }

        return redirect()->to('form-alert');
    }

    public function edit(int $id)
    {
        $country =  $this->countryModel->find($id);
        $data = [
            'country' => $country,
            'type' => $this->type
        ];

        echo view('country4/edit', $data);
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

        $result = $this->countryModel->save($data);
        if ($result) {
            service('alerts')->set('success', 'recordUpdated', ['id' => $id]);
        } else {
            service('alerts')->set('danger', 'recordUpdated', ['id' => $id]);
        }
        return redirect()->to('form-alert');
    }

    public function delete(int $id)
    {
        $result = $this->countryModel->delete($id);
 if ($result) {
            service('alerts')->set('success', 'recordDeleted', ['id' => $id]);
        } else {
            service('alerts')->set('danger', 'recordDeleted', ['id' => $id]);
        }
        return redirect()->to('form-alert');
    }
}

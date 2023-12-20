<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    private $services;
    public function __construct()
    {
        $this->services = new ServiceModel();
    }

    public function index()
    {
        

        $data['services'] = $this->services->findAll();
        return view('services/index', $data);
    }
    public function create()
    {
        return view('services/create');
    }
    public function delete($s_id)
    {
        $this->services->where('id', $s_id);
        $this->services->delete();
        $session = session();
        $session->getFlashdata('msg', 'Deleted Successfully');
        $this->response->redirect('/services');
    }

    public function edit($s_id)
    {
        $data = $this->services->find($s_id);
        return view('services/edit', $data);
    }

    public function update($s_id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'details' => $this->request->getVar('details'),
            'cost' => $this->request->getVar('cost'),
            'status' => $this->request->getVar('status'),
        ];

        $this->services->update($s_id, $data);
        $session = session();
        $session->setFlashdata('msg', 'Updated Successfully');
        $this->response->redirect('/services');
    }
}

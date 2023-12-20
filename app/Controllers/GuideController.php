<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuideModel;

class GuideController extends BaseController
{
    private $instructor; 
    public function __construct()
    {
        $this->instructor = new GuideModel();
    }
    public function index()
    {
        $data['instructor'] = $this->instructor->findAll();
        return view('guides/index', $data);
    }
    public function create()
    {
        return view('guides/create');
    }
    public function delete($g_id)
    {
        $this->instructor->where('id', $g_id);
        $this->instructor->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/guides');
    }

    public function edit($g_id)
    {
        $data= $this->instructor->find($g_id);
        return view('guides/edit', $data);
    }

    public function update($g_id)
    {
        $data = [
            'name' => $this->request->getVar('name'),
            'designation' => $this->request->getVar('designation'),
            // 'img' => $this->request->getVar('img'),
            'status' => $this->request->getVar('status'),
        ];

        $this->instructor->update($g_id, $data);
        $session = session();
        $session->setFlashdata('msg', 'Updated Successfully');
        $this->response->redirect('/guides');
    }
}

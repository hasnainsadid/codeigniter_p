<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PackageModel;

class PackageController extends BaseController
{
    private $packages;
    
    public function __construct(){
        $this->packages = new PackageModel();
    }
    public function index(){
        $data['packages'] = $this->packages->findAll();
        return view('packages/index', $data);
    }
    
    public function create()
    {
        return view('packages/create');
    }

    public function delete($p_id)
    {
        $this->packages->where('id', $p_id);
        $this->packages->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/packages');
    }
    public function edit($p_id)
    {
        $data = $this->packages->find($p_id);
        return view('packages/edit', $data);
    }

    public function update($p_id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'tour_location' => $this->request->getVar('tour_location'),
            'description' => $this->request->getVar('description'),
            'cost' => $this->request->getVar('cost'),
            // 'upload_path' => $this->request->getVar('upload_path'),
            'status' => $this->request->getVar('status'),
        ];

        $this->packages->update($p_id, $data);

        $session = session();
        $session->setFlashdata('msg', "Updated Successfully");
        $this->response->redirect('/packages');
    }


}

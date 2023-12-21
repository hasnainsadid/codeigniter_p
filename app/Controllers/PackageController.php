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

    public function store()
    {
        
        $rules = [
            'title' => 'required|max_length[30]',
            // 'pimg' => 'uploaded[pimg]|max_size[pimg,2048]|ext_in[photo,jpg,jpeg,png]',
        ];
        if (!$this->validate($rules)) {
            return redirect('packages/create');
        } else {
            $img = $this->request->getFile('upload_path');
            $img_name = $img->getRandomName();
            $img->move('assets/uploads', $img_name);

            $data = [
                'title' => $this->request->getVar('title'),
                'tour_location' => $this->request->getVar('tour_location'),
                'description' => $this->request->getVar('description'),
                'cost' => $this->request->getVar('cost'),
                'status' =>$this->request->getVar("status"),
                'upload_path' => $img_name,
            ];

            $this->packages->insert($data);
            $session = session();
            $session->setFlashdata('msg', 'Successfully Added');
            return $this->response->redirect('/packages');
        }
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

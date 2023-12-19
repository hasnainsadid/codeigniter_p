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
}

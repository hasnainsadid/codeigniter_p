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
        return view('packages/index');
    }
    
    public function create()
    {
        return view('packages/create');
    }
}

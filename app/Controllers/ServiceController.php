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
}

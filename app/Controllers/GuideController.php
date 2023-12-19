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
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GuideController extends BaseController
{
    public function index()
    {
        return view('guides/index');
    }
    public function create()
    {
        return view('guides/create');
    }
}

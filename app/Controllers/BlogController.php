<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogController extends BaseController
{
    public function index()
    {
        return view('blog/index');
    }
    public function create()
    {
        return view('blog/create');
    }
}

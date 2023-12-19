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
        $this->response->redirect('/instructor');
    }
}

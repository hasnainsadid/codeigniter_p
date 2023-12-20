<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    private $blog;
    public function __construct()
    {
        $this->blog = new BlogModel();
    }

    public function index()
    {
        $data['blogs'] = $this->blog->findAll();
        return view('blog/index', $data);
    }
    public function create()
    {
        return view('blog/create');
    }
    public function delete($b_id)
    {
        $this->blog->where('id', $b_id);
        $this->blog->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/blog');
    }
}

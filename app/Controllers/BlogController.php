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

    public function store()
    {
        
        $rules = [
            'title' => 'required|max_length[30]',
            // 'pimg' => 'uploaded[pimg]|max_size[pimg,2048]|ext_in[photo,jpg,jpeg,png]',
        ];
        if (!$this->validate($rules)) {
            return redirect('blog/create');
        } else {
            $img = $this->request->getFile('img');
            $img_name = $img->getRandomName();
            $img->move('assets/uploads', $img_name);

            $data = [
                'title' =>$this->request->getVar("title"),
                'details' =>$this->request->getVar("details"),
                'status' =>$this->request->getVar("status"),
                'img' => $img_name,
            ];
            //  print_r($data);
            $this->blog->insert($data);
            $session = session();
            $session->setFlashdata('msg', 'Successfully Added');
            return $this->response->redirect('/blog');
        }// return view('blog/create');
    }

    public function delete($b_id)
    {
        $this->blog->where('id', $b_id);
        $this->blog->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/blog');
    }

    public function edit($b_id)
    {
        $data = $this->blog->find($b_id);
        return view('blog/edit', $data);
    }

    public function update($b_id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'details' => $this->request->getVar('details'),
            // 'img' => $this->request->getVar('img'),
        ];

        $this->blog->update($b_id, $data);
        $session = session();
        $session->setFlashdata('msg', 'Updated Successfully');
        $this->response->redirect('/blog');
    }
}

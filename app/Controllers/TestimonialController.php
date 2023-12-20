<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class TestimonialController extends BaseController
{
    private $testimonials;
    public function __construct()
    {
        $this->testimonials = new TestimonialModel();
    }
    public function index()
    {
        $data['testimonials']=$this->testimonials->findAll();
        return view('testimonials/index', $data);
    }
    public function delete($t_id)
    {
        $this->testimonials->where('id', $t_id);
        $this->testimonials->delete();
        $session = session();
        $session->getFlashdata('msg', 'Deleted Successfully');
        $this->response->redirect('/testimonial');
    }
}

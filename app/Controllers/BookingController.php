<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;

class BookingController extends BaseController
{
    private $booking;

    public function __construct()
    {
        $this->booking = new BookingModel();
    }
    public function index()
    {
        $data['booking'] = $this->booking->findAll();
        return view('booking/index', $data);
    }

    public function create()
    {

    }
    public function store()
    {

    }
    public function edit()
    {

    }

    public function delete($b_id)
    {
        $this->booking->where('id', $b_id);
        $this->booking->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/booking');
    }

}

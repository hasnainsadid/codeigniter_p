<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MessageModel;

class MessageController extends BaseController
{
    private $inquiry;
    public function __construct()
    {
        $this->inquiry = new MessageModel();
    }
     
    public function index()
    {
        $data['inquiry'] = $this->inquiry->findAll();
        return view('messages/index', $data);
    }
    public function unread()
    {
        return view('messages/unread');
    }
    public function delete($i_id)
    {
        $this->inquiry->where('id', $i_id);
        $this->inquiry->delete();
        $session = session();
        $session->setFlashdata('msg', 'Deleted successfully.');
        $this->response->redirect('/messages');
    }
}

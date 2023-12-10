<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MessageController extends BaseController
{
    public function index()
    {
        return view('messages/index');
    }
    public function unread()
    {
        return view('messages/unread');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Moodboard extends BaseController
{
    public function index(): string
    {
        return view('users/Moodboard_Page');
    }
}

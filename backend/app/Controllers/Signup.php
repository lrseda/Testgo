<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Signup extends BaseController
{
    public function index(): string
    {
        return view('users/Signup_Page');
    }
}

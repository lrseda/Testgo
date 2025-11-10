<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Roadmap extends BaseController
{
    public function index(): string
    {
        return view('users/Roadmap_Page');
    }
}

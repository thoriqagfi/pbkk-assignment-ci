<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

class Overview extends BaseController
{
  public function index(): string
  {
    // View the admin/overview.php file
    return view('admin/overview');
  }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmidController extends Controller
{
      public function index()
    {
        return view('admin.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateOneController extends Controller
{
    public function index()
    {
        return view('template-onde.index');
    }
}

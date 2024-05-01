<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortifolioController extends Controller
{

    public function index()
    {
        return view('portifolio.index');
    }

    public function portifolioDetails()
    {
        return view('portifolio.portfolio-details');
    }
}

<?php

namespace App\Http\Controllers;

use App\Libraries\LayoutManager;

class HomeController extends Controller
{
    public function index(LayoutManager $layoutManager)
    {
        return view('home.index', $layoutManager->getData());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homeIndex()
    {
        return View('homeIndex');
    }

    public function about()
    {
        return View('about');
    }
    public function contactUs()
    {
        return View('contactUs');
    }
    public function ProductsAndServices()
    {
        return View('ProductsAndServices');
    }
}

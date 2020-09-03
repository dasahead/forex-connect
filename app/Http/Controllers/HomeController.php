<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
class HomeController extends Controller
{
    public function index()
    {
        Cookie::queue('language', true, 15);
        return view('home');
    }
}

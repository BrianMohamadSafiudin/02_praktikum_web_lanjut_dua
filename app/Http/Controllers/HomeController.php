<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        return "Ini adalah halaman beranda" ;
    }
}

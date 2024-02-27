<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller {
    
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('about/hbbspace');
    }

    public function articles($id) {
        return "Halaman Artikel  dengan ID = " . $id;
    }
}
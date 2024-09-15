<?php

namespace App\Http\Controllers;

class SiteController
{

    public function index() {
        return view('site.index');
    }
    public function about() {
        return view('site.about');
    }

    public function curriculum() {
        return view('site.curriculum');
    }
}

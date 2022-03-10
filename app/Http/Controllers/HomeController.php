<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Service;
use App\Models\Image;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'information' => Information::first(),
            'services' => Service::get(),
            'images' => Image::get()
        ]);
    }
}

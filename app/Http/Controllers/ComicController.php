<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Carbon\Carbon;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $data = ['comics' => $comics];
        return view('home', $data);
    }
}
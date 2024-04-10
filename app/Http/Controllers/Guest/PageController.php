<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $train = Train::where('departure_date', '>=', date('Y-m-d-h-i-s'))->orderBy('departure_date')->get();

        return view('home', compact('train'));
    }
}

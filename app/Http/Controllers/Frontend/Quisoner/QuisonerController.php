<?php

namespace App\Http\Controllers\Frontend\Quisoner;

use App\Http\Controllers\Controller;

class QuisonerController extends Controller
{
    public function index()
    {
        return view('frontend.kuisoner.index');
    }
}
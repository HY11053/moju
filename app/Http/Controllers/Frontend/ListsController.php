<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    public function jiaIndex()
    {
        return view('frontend.jiaindex');
    }
}

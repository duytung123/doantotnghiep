<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;

class WatchController extends Controller
{
    public function getindex()
    {

    	return view('fontend.Watch.Watch');
    }
}

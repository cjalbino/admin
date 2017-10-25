<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function showMaps()
    {
    	return view('maps');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function showUpgrade()
    {
    	return view('upgrade');
    }
}

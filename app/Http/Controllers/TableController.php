<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function showTable()
    {
    	return view('table');
    }
}

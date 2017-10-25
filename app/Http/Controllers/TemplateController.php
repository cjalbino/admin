<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function showTemplate()
    {
    	return view('template');
    }
}

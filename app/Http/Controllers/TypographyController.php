<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypographyController extends Controller
{
    public function showTypography()
    {
    	return view('typography');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class TopController extends Controller
{
    
    public function top()
    {
    return view('front.page.top');
    }
}

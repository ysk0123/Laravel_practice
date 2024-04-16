<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AboutController extends Controller
{
    //aboutメソッドの定義
    public function about()
    {
        return view('front.page.about');
    }
}
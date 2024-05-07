<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class AboutController extends Controller
{
    //aboutメソッドの定義
    public function about()
    {
        $users = User::all();
        return view('front.page.about',['users' =>$users]);
    }
}
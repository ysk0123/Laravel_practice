<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Company;
class TopController extends Controller
{
    
    public function top()
    {
        $companies = Company::all();
        return view('front.page.top',['companies' => $companies]);
    }
    // public function about()
    // {
    //     $users = User::with('company')->get();
    //     return view('about', ['users' => $users]);
    // }
}

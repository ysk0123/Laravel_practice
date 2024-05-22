<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $users = User::with('company')->withCount('books')->get();
            return view('users.index', compact('users'));
        
    }
    public function show($id)
    {
        // 特定のユーザーとその関連データを取得
        $user = User::with('company', 'books')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect(route('users.index'));
    }
}

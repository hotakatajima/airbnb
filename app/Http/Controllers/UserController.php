<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->update([
            'status' => 'host'
        ]);
        return view('host.index');
    }

    public function indexindex()
    {
        return view('host.index');
    }
}

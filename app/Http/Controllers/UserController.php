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

    public function userprofile($id)
    {
        $user = User::find($id);
        return view('users.userprofile',compact('user'));
    }

    public function useredit($id)
    {
        $user = User::find($id);
        return view('users.edituser',compact('user'));
    }

    public function uploadprofile($id, Request $request)
    {
        $user = User::find($id);
        if($request->password == null){
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'description' => $request->description,
                'email' => $request->email,
                'password' => $user->password,
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'description' => $request->description,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        }
        
        return back();
    }

}
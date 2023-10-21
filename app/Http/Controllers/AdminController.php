<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function loginCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('fail', 'Invalid User/Password');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Mail;

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

    public function forgotPassword(Request $request)
    {
        
        if($request->isMethod('post')) {
            $validated_data = $request->validate([
                'forgot_email' => 'required'
            ]);

            if($validated_data['forgot_email'] != "nadipathygoshala@gmail.com") {
                return redirect()->back()->with("fail","Please enter correct email address");
            }

            
            $details = [
                'user' => 'Krishnam Raju',
                'company' => 'Nadipathy Goshala',
                'email' =>  Crypt::encrypt('nadipathygoshala@gmail.com'),
                'expireIn' =>  Crypt::encrypt(date('Y-m-d H:i:s', strtotime('+30 minute'))),
            ];

            Mail::to('shaikhanumanbabu453@gmail.com')->send( new ForgotPasswordMail($details));
            session()->flash('success' ,'we have sent verification link to "nadipathygoshala@gmail.com" mail, Please check your indbox!');
            return redirect('/admin');
            

        }
        return view('admin.forgot-password');
        

        // return redirect()->back()->with('fail', 'Invalid User/Password');
    }

    public function updatePassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated_data = $request->validate([
                'password' => 'required|confirmed|min:6|max:12',
            ]);

            $user = User::findOrFail(1);
            $pwd = Hash::make($validated_data['password']);
            $user->update([
                'password' => $pwd
            ]);

            session()->flash('success', 'Password updated successfully!');
            return redirect('/admin');



        } else {
            $token = request('token') ? Crypt::decrypt(request('token')) : '';
            $email = request('email') ? Crypt::decrypt(request('email')) : '';
            if (
                $email != 'nadipathygoshala@gmail.com' ||
                Carbon::now()->diffInMinutes((new Carbon($token))) > 30
            ) {
                abort(401, "User can't perform this action.");
            }
            return view('admin.update-password');
        }

    }


    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        }

        if ($request->isMethod('get')) {
            return view('admin.login');
        }

        if ($request->isMethod('post')) {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                toastr_notify('Login successful! Welcome to the dashboard.', 'success');
                return redirect()->intended('admin/dashboard');    
            } else {
                toastr_notify('Invalid email or password!', 'error');
                return redirect('admin/login');
            }
        }
    }   

    public function logout()
    {

        Auth::logout();
        toastr_notify('Successfully logged out!', 'success');
        return redirect('/admin/login');
    }


    public function forgotPassword()
    {
        if(Auth::check()){
            return redirect('admin/dashboard');
        }else{
            return view('admin.forgot_pass');
        }
    }

    public function dashboard()
    {
        if (!Auth::check()) {
            return view('admin.login');
        } else {
            return view('admin.index');
        }
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function editProfile(Request $request)
    {
        $admin = User::first(); 
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        toastr_notify('Your profile has been successfully updated!', 'success');
        return redirect('admin/profile');
    }
    
    public function changePassword(Request $request)
    {

        $password = Hash::make($request->password);
        $admin = User::first();
        $admin->password = $password;
        $admin->save();
        toastr_notify('Your password has been successfully updated!', 'success');
        return redirect('admin/profile');
    }
    

 

    public function sendResetLink(Request $request)
    {
        if(Auth::check()){
            return redirect('admin/dashboard');
        }else{
            
            $request->validate([
                'email' => 'required|email|exists:users,email', 
            ]);
    
            $tempPassword = Str::random(10); 
            session(['temporary_password' => $tempPassword]);
    
            $user = User::where('email', $request->email)->first();
    
            $user->password = Hash::make($tempPassword);
            $user->save();
    
            Mail::send('emails.forget_email', ['tempPassword' => $tempPassword], function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('forgot_password');
            });
            toastr_notify('Sent a password to your email!', 'success');
            return redirect('admin/forgot-password');
        }

    }

    public function showNewPasswordForm(){
        if(Auth::check()){
            return redirect('admin/dashboard');
        }else{
        return view('admin.new_pass');
        }
    }

    public function updatePassword(Request $request)
    {
        $temporaryPassword = session('temporary_password');
    
        if ($request->old_password !== $temporaryPassword) {
            return redirect()->back()->with('error_message', 'The old password is incorrect.');
        }
    
        $user = User::get()->first();
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        session()->forget('temporary_password');
        toastr_notify('Your password has been updated successfully!', 'success');
        return redirect('admin/login');
    }
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentLoginController extends Controller
{
    
    public function Sauthenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:10',
        ], [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'The password field is required.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Student::where('email', $credentials['email'])->first() && \Hash::check($credentials['password'], Student::where('email', $credentials['email'])->first()->password)) {
            return redirect('/Studentlist'); 
        } else {
            return back()
                ->withErrors(['Invalid credentials!'])
                ->withInput($request->except('password'))
                ->with('error', 'Invalid credentials! Please check your email and password.');
        }
    }
}

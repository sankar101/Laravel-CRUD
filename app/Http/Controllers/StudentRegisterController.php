<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class StudentRegisterController extends Controller
{
    public function sregister(Request $reqt){
        $validateDate=$reqt->validate( 
            [
                'name'=>'required|min:6|max:10',
                'dob'=>'required|date|before:-18 years',
                'email'=>'required|email|max:50',
                'password' => 'min:6|max:10',
                'cpassword' => 'required_with:password|same:password|min:6|max:10',
                'contact'=>'required|numeric|digits:10',
                'address'=>'required|max:255',
                'pincode'=>'required|numeric|digits:6',
                'state'=>'required',
                'gender'=>'required',
            ],[
                'name.required'=>'Please Enter the name',               
                'dob.required'=>'Please Select DOB',
                'dob.before'=>'You are not 18 Years Old',
                'email.required'=>'Please Enter the Email Address',
                'email.email'=>'Please Enter the Valid Email',
                'contact.required'=>'Please Enter the contact',
                'address.required'=>'Please Enter the Address',
                'pincode.required'=>'Please Enter the Pincode',
                'contact.numeric'=>'Please Enter the number only',
                'contact.digits'=>'Please Enter the 10 digits',
                'gender.required'=>'Select gender',
                'password.required'=>'Minimum 6 characters',
                'password.min:6'=>'Minimum 6 characters',
                'cpassword.required'=>'Password do not match',
                'cpassword.required_with:password'=>'Password do not match',
                'pincode.numeric'=>'Please Enter the number only',
                'pincode.digits'=>'Please Enter the 6 digits',

            ]);
            $detail=new Student();
            $reg_id = Helper::IDGenerator(new Student,'reg_id',5,'USR');
            $detail->reg_id = $reg_id;
            $detail->name=$reqt->input('name');
            $detail->dob=$reqt->input('dob');
            $detail->gender=$reqt->input('gender');
            $detail->email=$reqt->input('email');
            $detail->password= bcrypt ($reqt->input('password'));
            $detail->contact=$reqt->input('contact');
            $detail->address=$reqt->input('address');
            $detail->pincode=$reqt->input('pincode');
            $detail->state=$reqt->input('state');
            $detail->save();
            return redirect('/stulogin');
           }

}

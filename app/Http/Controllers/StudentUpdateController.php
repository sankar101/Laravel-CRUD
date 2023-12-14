<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use \Illuminate\Pagination\LengthAwarePaginator;

class StudentUpdateController extends Controller
{
    public function edit($id)
    {
        $user = Student::findOrFail($id);
        return view('Dash.stuedit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
                'name'=>'required|min:6|max:10',
                'dob'=>'required|date|before:-18 years',
                'email'=>'required|email|max:50',
                'contact'=>'required|numeric|digits:10',
                'address'=>'required|max:255',
                'pincode'=>'required|numeric|digits:6',
                'state'=>'required',
        ]);

        $user = Student::findOrFail($id);
        $user->update($validatedData);

        return redirect('Studentlist');
    }
}

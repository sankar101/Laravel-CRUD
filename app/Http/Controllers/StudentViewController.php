<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentViewController extends Controller
{
    public function view($id)
    {
        $student = Student::find($id);
        return view('Dash.stuview', ['student' => $student]);
    }
}

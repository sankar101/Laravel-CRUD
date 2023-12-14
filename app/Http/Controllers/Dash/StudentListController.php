<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentListController extends Controller
{
    //List
    public function stud_list(){
        $students=DB::select("select * from students");
        return view('Dash.Studentlist',['student' => $students]);
    }
    public function boot(){
        Student::creating(function($student){

        });
    }
    public function delete($id){
        DB::delete ("delete from students where id=?",[$id]);
        return "Record Delete Successfully!<a href='/Studentlist'>Back</a>";
    }
    public function updatee($id){
        $users = Student::find($id);
        if($users){
            if($users -> status){
                $users -> status = 0;
            }else {
                $users -> status = 1;
            }
            $users -> save();
        }
        return back();
    } 
}

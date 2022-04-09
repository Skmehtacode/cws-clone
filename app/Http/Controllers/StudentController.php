<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $data['students'] = Student::where("status","1")->get();
        $data['title'] = "Active";
        return view("admin/manageStudent",$data);
    }
    public function newAdmission(){
        $data['students'] = Student::where("status","0")->get();
        $data['title'] = "newAdmission";
        return view("admin/manageStudent",$data);
    }
    public function passOut(){
        $data['students'] = Student::where("status","2")->get();
        $data['title'] = "passOut";
        return view("admin/manageStudent",$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Phone;
class StudentController extends Controller
{

    public function index(){

        $phones=Phone::all();
        $students=Student::all();

        // return $students; exit();
        return view('welcome' , compact(['phones','students']));
    }
}

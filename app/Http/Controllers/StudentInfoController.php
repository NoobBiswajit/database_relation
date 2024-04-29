<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;
use App\Models\StudentInfoNumber;

class StudentInfoController extends Controller
{
    public function index(){
        $stdinfos=StudentInfo::all();
        $stdNums=StudentInfoNumber::all();

        return view ('OneToMany' , compact(['stdinfos','stdNums']));


    }
}

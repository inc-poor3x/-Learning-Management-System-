<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    public function InstructorDashbord(){
        view('instructor.instructor_dashbord');
    }
}

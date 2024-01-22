<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    //
    public function InstructorDashboard() {
        return view('instructor.index');
    }
}

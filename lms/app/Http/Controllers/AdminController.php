<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function AdminDashbord(){



        
        return view('admin.admin_dashbord');

    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //function
    public function index(){
        return 'hello controller';
        //return view('admin.dashboard')
    }
}

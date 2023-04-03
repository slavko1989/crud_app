<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    public function home(){
        $show = Employee::paginate(2);
        return view('/home',compact('show'));
    }
}

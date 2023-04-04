<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DB;

class HomeController extends Controller
{
    public function home(){
        $show = Employee::paginate(2);
        return view('/home',compact('show'));
    }

    public function search_page(Request $request){

        $search = $request->input('search');
        $search = Employee::query()->where('name','LIKE',"%{$search}%")->where('post','LIKE',"%{$search}%")->get();
        return view('/search_page',compact('search'));
    }
}

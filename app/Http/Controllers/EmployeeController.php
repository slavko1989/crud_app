<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function create(){
        return view('/create');
    }
    public function store(EmployeeRequest $request){

        $request->validated();
        
        $employee = new Employee;
        if($employee){
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->post = $request->input('post');

        $image = $request->image;
        if($image){
            $img_name = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('employees_profile',$img_name);
            $employee->image=$img_name;
        }
        $employee->save();

        Mail::send('emails.employee_created', $employee->toArray(),
        function($message){
            $message->to('slavko.slave1989@gmail.com','Example sending mail')->subject('Created Employee');
        });



        return redirect()->back()->with('create_employee','New Employee are created');
    }else{
        return redirect()->back()->with('error_create_employee','New Employee are not created');
        }
    }

  
    public function delete($id){

        $delete = Employee::where('id',$id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('deleted_employee','Employee are deleted');

    }

    public function edit($id){

        $edit = Employee::where('id','=',$id)->first();
        return view('edit',compact('edit'));

    }

    public function update(Request $request,$id){

        $update = Employee::find($id);

        $image = $request->image;
        if($image){
            $img_name = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('employees_profile',$img_name);
            $update->image=$img_name;
        }

        $update->id = $request->input('id');
        $update->name = $request->input('name');
        $update->post = $request->input('post');
        $update->email = $request->input('email');

        $update->update();

        return redirect()->back()->with('edit','Employee is successfully updated');
        
    }
}

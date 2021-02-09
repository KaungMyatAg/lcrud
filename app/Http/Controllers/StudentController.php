<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $records = Student::paginate(5);
        return view('student.index',['records'=>$records]);
    }
    public function show($id)
    {

    }
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:6 | max:20',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $student = new Student;
        $student->name      = $request->input('name');
        $student->email     = $request->input('email');
        $student->phone     = $request->input('phone');
        $student->address   = $request->input('address');
        $student->save();
        return redirect(route('index'))->with('success','Student Added Successfully');
    }
    
    public function edit($id)
    {
        $record = Student::findOrFail($id);
        return view('student.edit',['record'=>$record]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'      => 'required | min:6 | max:20',
            'email'     => 'required',
            'phone'     => 'required',
            'address'   => 'required'
        ]);

        $student = Student::findOrFail($id);
        $student->name      = $request->input('name');
        $student->email     = $request->input('email');
        $student->phone     = $request->input('phone');
        $student->address   = $request->input('address');
        $student->save();
        return redirect(route('index'))->with('success','Update Data Successfully');
    }

    public function destory($id)
    {
        Student::find($id)->delete();
        return redirect(route('index'))->with('success','Delete Data Successfully');
    }

}

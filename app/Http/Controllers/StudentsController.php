<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('student.detail',compact('student'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Student::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'major' => $request->major,
        ]);
        return redirect('/');
    }

    public function edit($id)
    {
        $data = Student::find($id);

        return view('student.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        //dd($request->all());
        $student = Student::find($id);
        $student->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'major' => $request->major,
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        //dd($request->all());
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}

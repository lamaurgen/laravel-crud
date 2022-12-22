<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Subject;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();

        $students = Student::latest()->paginate(5);
        return view('students.index',compact('students','subjects'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $data = subject::all();
        return view('students.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
      $request-> validate([
        'name'=> 'required',
        'address'=> 'required',
        'email'=> 'required',
        'number'=> 'required',
        'gender'=> 'required',
        'subject_id'=> 'required'
      ]);
    //   dd($request->all());
      student::create ($request-> all());
      return redirect ()-> route ('students.index')
      ->with ('success','User created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view ('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data = subject::all();

        return view('students.edit',compact('student','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        
        $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'email'=> 'required',
            'number'=> 'required',
            'gender'=> 'required',
        ]);
    
        $student->update($request->all());
    
        return redirect()->route('students.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
    
        return redirect()->route('students.index')
                        ->with('success','User deleted successfully');
    }
}

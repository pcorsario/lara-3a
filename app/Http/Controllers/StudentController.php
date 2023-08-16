<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::all();
        // dd($students);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $validated = $request->validate([
        //     'apellidos' => ['required'],
        // ]);
        $student = new Student();
        $student->apellidos=$request->txt_ape;
        $student->nombres=$request->txt_nom;
        $student->telefono=$request->txt_tel;
        $student->especialidad=$request->txt_esp;
        $student->curso=$request->txt_cur;
        $student->paralelo=$request->txt_paralelo   ;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $student = Student::findOrFail($id);
        $student->apellidos=$request->txt_ape;
        $student->nombres=$request->txt_nom;
        $student->telefono=$request->txt_tel;
        $student->especialidad=$request->txt_esp;
        $student->curso=$request->txt_cur;
        $student->paralelo=$request->txt_paralelo   ;
        $student->update();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
        
    }

    public function confirm(string $id){
        $student = Student::findOrFail($id);
        return view('students.confirm', compact('student'));
    }


}

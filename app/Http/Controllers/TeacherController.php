<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        // dd('hai');
        $teacher = Teacher::all();
        return view('teacher',[
            'teachers' => $teacher
        ]);
    }
    
    public function show($id){
        // dd($id);
        $teacher = Teacher::with('class.student')->findOrfail($id);
        return view('teacher-detail',[
            'teacher' => $teacher
        ]);
    }

    public function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('teacher-add', [
            'teacher' => $teacher
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $teacher = Teacher::create($request->all());
        return redirect('/teacher');
    }
}


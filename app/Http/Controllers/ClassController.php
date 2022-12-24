<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        // dd('hai');
        // $class = Clas::all();
        // $class = Clas::with(['student', 'homeroomTeacher'])->get();
        $class = Clas::get();
        return view('class',[
            'class' => $class,
        ]);
    }
    
    public function show($id){
        $class = Clas::with(['student', 'homeroomTeacher'])->findOrfail($id);
        return view('class-detail', [
            'class' => $class
        ]);
    }

    public function create()
    {
        // $class = Clas::all();
        $teacher = Teacher::select('id', 'name')->get();
        // dd('Halo');
        return view('class-add', [
            'teacher' => $teacher,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $class = Clas::create($request->all());
        return redirect('/class');
    }
}

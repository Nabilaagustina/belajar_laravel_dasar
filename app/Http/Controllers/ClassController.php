<?php

namespace App\Http\Controllers;

use App\Models\Clas;
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
}

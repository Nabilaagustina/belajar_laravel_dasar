<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(){
        // dd('hai');
        $class = Clas::all();
        return view('class',[
            'class' => $class,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        
        if($class){
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah class baru berhasil');
        }

        return redirect('/class');
    }

    public function edit(Request $request, $id)
    {
        // dd('hai');
        $class = Clas::with(['homeroomTeacher'])->FindOrFail($id);
        $teacher = Teacher::where('id', '!=', $class->teacher_id)->get(['id', 'name']);
        return view('class-edit',[
            'class' => $class,
            'teacher' => $teacher,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd('hai');
        // dd($request->all());
        $class = Clas::FindOrFail($id);
        $class->update($request->all());
        return redirect('/class');
    }

    public function delete($id)
    {
        // dd($id);
        $class = Clas::FindOrFail($id);
        return view('class-delete', [
            'class' =>$class,
        ]);
    }

    public function destroy($id)
    {
        $deletedclass = Clas::FindOrFail($id);
        
        // if($deletedclass->delete()) {  
        //     $deletedclass->student()->delete();
        //     $deletedclass->homeroomTeacher()->delete();
        //     return response()->json(['status'=>'success']);    
        // }   
        
        $deletedclass->student()->delete();
        $deletedclass->homeroomTeacher()->delete();
        $deletedclass->delete();
        
        return redirect('/class');
    }
}

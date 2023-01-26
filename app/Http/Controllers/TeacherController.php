<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        
        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah guru baru berhasil');
        }
        
        return redirect('/teacher');
    }

    public function edit(Request $request, $id)
    {
        $teacher = Teacher::FindOrFail($id);
        return view('teacher-edit', [
            'teacher' => $teacher,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd('hallo');
        $teacher = Teacher::FindOrFail($id);
        $teacher->update($request->all());

        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Data guru berhasil diubah');
        }

        return redirect('teacher');
    }

    public function delete($id)
    {
        // dd($id);
        $teacher = Teacher::FindOrFail($id);
        return view('/teacher-delete', [
            'teacher' => $teacher
        ]);
    }

    public function destroy($id)
    {
        // dd($id);
        $teacher = Teacher::FindOrFail($id);
        $teacher->delete();

        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Data guru baru berhasil dihapus');
        }

        return redirect('/teacher');
    }

    public function deleted()
    {
        // dd('hay');
        $teacher = Teacher::onlyTrashed()->get();
        // dd($teacher);
        return view('teacher-deleted-list', [
            'teacher' => $teacher
        ]);
    }

    public function restore($id)
    {
        $teacher = Teacher::withTrashed()->where('id',$id)->restore();

        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Data guru berhasil dikembalikan');
        }

        return redirect('/teacher');
    }
}


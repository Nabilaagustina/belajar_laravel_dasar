<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    public function index(Request $request){
        // dd('hai');
        // $class = Clas::all();
        // $class = Clas::with(['student', 'homeroomTeacher'])->get();
        $keyword = $request->keyword;
        $class = Clas::where('name', 'LIKE', '%'.$keyword.'%')
                ->paginate(10);
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
        // dd($request->photo);
        $newName = '';
        if($request->file('photo')){
            // dd('hai');
            $nameClass = str_replace(' ', '', $request->name);
            $extension = $request->file('photo')->getCLientOriginalExtension();
            $date = date('YmdHis');
            $newName = $nameClass.'-'.$date.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
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

        $teacherEx = Teacher::where('id', '!=', $class->teacher_id)->get(['id', 'name']);
        $teacher = Teacher::all();
        return view('class-edit',[
            'class' => $class,
            'teacherex' => $teacherEx,
            'teacher' => $teacher,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd('hai');
        // dd($request->all());
        $class = Clas::FindOrFail($id);
        $class->update($request->all());

        if($class){
            Session::flash('status', 'success');
            Session::flash('message', 'Data class berhasil diubah');
        }

        return redirect('/class');
    }

    public function delete($id)
    {
        // dd($id);
        $class = Clas::FindOrFail($id);

        if($class){
            Session::flash('status', 'success');
            Session::flash('message', 'Data class berhasil dihapus');
        }

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
            
        if($deletedclass){
            Session::flash('status', 'success');
            Session::flash('message', 'Delete data class berhasil');
        }
        
        return redirect('/class');
    }

    public function deletedClass(Request $request)
    {
        $keyword = $request->keyword;
        $class = Clas::onlyTrashed()
                        ->where('name', 'LIKE', '%'.$keyword.'%')
                        ->paginate(10);
        // dd($class);
        return view('class-deleted-list', [
            'class' => $class,
        ]);
    }

    public function restore($id)
    {
        // dd('hay');
        $class = Clas::withTrashed()->where('id', $id)->restore();
        
        if($class){
            Session::flash('status', 'success');
            Session::flash('message', 'Restore data class berhasil');
        }

        return redirect('/class');
    }
}

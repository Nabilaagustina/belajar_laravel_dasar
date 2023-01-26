<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

class ExtracurricularController extends Controller
{
    public function index()
    {
        // $ekskul = Extracurricular::with('students')->get();
        $ekskul = Extracurricular::get();
        // dd($ekskul);
        return view('extracurricular', ['ekskul' => $ekskul]);
    }
    
    public function show($id){
        $ekskul = Extracurricular::with('students')->findOrFail($id);
        return view('extracurricular-detail', ['ekskul' => $ekskul]);
        dd($id);
    }

    public function create()
    {
        $ekskul = Extracurricular::select('id', 'name')->get();
        return view('extracurricular-add', [
            'ekskul' => $ekskul
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $ekstra = Extracurricular::create($request->all());
        
        if($ekstra){
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah student baru berhasil');
        }

        return redirect('/extracurricular');
    }

    public function edit(Request $request, $id)
    {
        $ekstra = Extracurricular::FindOrFail($id);
        return view('extracu-edit', [
            'ekstra' => $ekstra
        ]);
        // dd($ekstra);
    }

    public function update(Request $request, $id)
    {
        // dd('hallo');
        $ekstra = Extracurricular::FindOrFail($id);
        $ekstra->update($request->all());

        if($ekstra){
            Session::flash('status', 'success');
            Session::flash('message', 'Data student berhasil dirubah');
        }

        return redirect('extracurricular');
    }

    public function delete($id)
    {
        // dd($id);
        $ekstra = Extracurricular::FindOrFail($id);
        // dd($ekstra);

        return view('extracu-delete', [
            'ekstra' => $ekstra,
        ]);
    }
    
    public function destroy($id)
    {
        // dd($id);
        $ekstra = Extracurricular::FindOrFail($id);

        if($ekstra){
            Session::flash('status', 'success');
            Session::flash('message', 'Data student berhasil dihapus');
        }

        $ekstra->delete();
        return redirect('/extracurricular');
    }

    public function deletedEkstra()
    {
        // dd('hay');
        $ekstra = Extracurricular::onlyTrashed()->get();
        // dd($ekstra);
        return view('ekstra-deleted-list', [
            'ekstra' => $ekstra,
        ]);
    }

    public function restore($id)
    {
        // dd('hai');
        $ekstra = Extracurricular::withTrashed()->where('id', $id)->restore();
        
        if($ekstra){
            Session::flash('status', 'success');
            Session::flash('message', 'Data student berhasil dikembalikan');
        }
        
        return redirect('/extracurricular');
    }
}

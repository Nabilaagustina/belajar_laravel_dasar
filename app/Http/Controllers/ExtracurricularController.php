<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

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
        $ekstra->delete();
        return redirect('/extracurricular');
    }
}

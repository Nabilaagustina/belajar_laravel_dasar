<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get();
        // // dd($student);
        return view('student', [
            'studentList' => $student
        ]);

        // Quoery builder
        // $student = DB::table('students')->get();
        // dd($student);
        // DB::table('students')->insert([
        //     'name' => 'Tes Quoery builder',
        //     'gender' => 'P',
        //     'nis' => '100003',
        //     'class_id' => 3
        // ]);
        // DB::table('students')->where('id', 27)->update(['name' => 'update Quoery builder']);
        // DB::table('students')->where('id', 27)->delete();

        
        // Eloquent
        // $student = Student::all();
        // Student::create([
        //     'name' => 'Tes Eloquent',
        //     'gender' => 'P',
        //     'nis' => '100003',
        //     'class_id' => 3
        // ]);
        // dd($student);
        // Student::findOrfail(29)->update([
        //     'name' => 'Update Eloquent',
        //     'class_id' => 4
        // ]);
        // Student::findOrfail(29)->delete();

        // $nilai = [2, 4, 5, 5, 3, 9];
        // dd($nilai);

        // PHP BIASA
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $rataRata = $totalNilai /  $countNilai;
        // dd($rataRata);
        
        // Collection
        // $rataRata = collect($nilai)->AVG();
        // dd($rataRata);

        // Contains
        // $testContains = collect($nilai)->contains(function($value){
        //     return $value < 5;
        // });
        // dd($testContains);

        // $perbandinganNilai = [9, 7, 3, 6, 5];
        // $collectNilai = collect($nilai);
        // $diff = $collectNilai->diff($perbandinganNilai);
        // dd($diff->all());

        // Filter
        // $testFilter = collect($nilai)->filter(function($value){
        //     return $value > 4;
        // })->all();
        // dd($testFilter);

        // Pluck
        // $datas = [
        //     ['name'=>'Bila', 'gender'=>'P', 'nis'=>'10001', 'class_id'=>1],
        //     ['name'=>'Nabila', 'gender'=>'P', 'nis'=>'10002', 'class_id'=>2],
        // ];
        // $testPluck = collect($datas)->pluck('name')->all();
        // dd($testPluck);

        // Map
        // PHP BIASA
        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value*2);
        // }
        // dd($nilaiKaliDua);
        // $testMap = collect($nilai)->map(function($value){
        //     return $value * 2;
        // })->all();
        
        // dd($testMap);

    }
}

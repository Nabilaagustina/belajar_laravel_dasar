<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        // $student = Student::all();
        // // dd($student);
        // return view('student', [
        //     'studentList' => $student
        // ]);

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
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $datas = [
            ['name'=>'Bila', 'gender'=>'P', 'nis'=>'10001', 'class_id'=>1],
            ['name'=>'Nabila', 'gender'=>'P', 'nis'=>'10002', 'class_id'=>2],
        ];

        foreach ($datas as $data) {
            Student::insert([
                'Name' => $data['name'],
                'gender' => $data['gender'],
                'nis' => $data['nis'],
                'class_id' => $data['class_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

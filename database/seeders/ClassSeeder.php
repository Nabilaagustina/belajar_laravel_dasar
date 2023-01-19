<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Clas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Clas::truncate();
        Schema::enableForeignKeyConstraints();
        
        $datas = [
            ['name' => '1A', 'teacher_id' => 1],
            ['name' => '1B', 'teacher_id' => 2],
            ['name' => '1C', 'teacher_id' => 3],
            ['name' => '1D', 'teacher_id' => 4],
        ];

        foreach ($datas as $data) {
            Clas::insert([
                'name' => $data['name'],
                'teacher_id' => $data['teacher_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

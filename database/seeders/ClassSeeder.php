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
            ['name' => '1A'],
            ['name' => '1B'],
            ['name' => '1C'],
            ['name' => '1D'],
        ];

        foreach ($datas as $data) {
            Clas::insert([
                'name' => $data['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

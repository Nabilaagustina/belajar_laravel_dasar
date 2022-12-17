<?php

namespace App\Models;

use App\Models\Clas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'gender',
    //     'nis',
    //     'class_id'
    // ];

    public function class()
    {
        return $this->belongsTo(Clas::class);
    }
}

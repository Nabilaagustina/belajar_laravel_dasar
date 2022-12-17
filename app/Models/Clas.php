<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clas extends Model
{
    use HasFactory;
    protected $table = 'class';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    
    public function student()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}

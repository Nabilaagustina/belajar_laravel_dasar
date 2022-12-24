<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clas extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $fillable = [
        'name',
        'teacher_id',
    ];
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;
    
    public function student()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }

    
    public function homeroomTeacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}

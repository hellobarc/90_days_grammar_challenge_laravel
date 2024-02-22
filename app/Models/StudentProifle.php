<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProifle extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'phone',
        'preparation_course',
    ];
}

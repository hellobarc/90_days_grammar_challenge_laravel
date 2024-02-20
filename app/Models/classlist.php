<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'embed_link',
        'class_number',
        'class_description',
    ];
}

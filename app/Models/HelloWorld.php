<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelloWorld extends Model
{
    use HasFactory;

    protected $table = 'hello_world_time_stamp';
    protected $fillable = [
        'content',
    ];
}

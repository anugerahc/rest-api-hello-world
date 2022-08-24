<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HelloWorld extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hello_world_time_stamp';
    protected $fillable = [
        'content',
    ];

    protected $hidden = [];
}

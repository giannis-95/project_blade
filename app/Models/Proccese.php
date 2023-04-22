<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proccese extends Model
{
    use HasFactory;

    protected $fillable = [
        'average_id' ,
        'name',
    ];
}

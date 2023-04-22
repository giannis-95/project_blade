<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Relationships\AverageRelationship;

class Average extends Model
{
    use HasFactory,AverageRelationship;

    protected $fillable = [
        'user_id' ,
        'first_value' ,
        'second_value' ,
        'average_value' ,
    ];
}

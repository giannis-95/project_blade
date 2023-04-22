<?php

namespace App\Models\Relationships;

use App\Models\Proccese;

trait AverageRelationship{

    public function procces(){
        return $this->hasMany(Proccese::class);
    }
}


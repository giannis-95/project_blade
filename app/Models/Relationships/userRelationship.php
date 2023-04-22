<?php

namespace App\Models\Relationships;

use App\Models\Average;

trait UserRelationship{

    public function prices(){
        return $this->hasMany(Average::class);
    }
}


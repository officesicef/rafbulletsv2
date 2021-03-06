<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    public function examinations()
    {
        return $this->belongsToMany(Symptom::class);
    }
}

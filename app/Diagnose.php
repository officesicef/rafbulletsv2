<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'symptom_diagnose');
    }

    public function examinations()
    {
        return $this->hasMany(Examination::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function diagnose()
    {
        return $this->belongsTo(Diagnose::class);
    }

    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class);
    }
}

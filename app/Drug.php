<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    public function examinations()
    {
        return $this->belongsToMany(Examination::class);
    }

    public function contraDrugs()
    {
        return $this->belongsToMany(Drug::class, 'drug_contra_drug', 'drug_id', 'contra_drug_id');
    }

    public function diagnoses()
    {
        return $this->belongsToMany(Diagnose::class );
    }
}

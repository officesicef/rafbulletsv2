<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $drugs_contra_drugs = DB::table('drug_contra_drug')->get();
    foreach ($drugs_contra_drugs as $drugs_contra_drug) {
        if(!DB::table('drug_contra_drug')
            ->where('drug_id', $drugs_contra_drug->contra_drug_id)
            ->where('contra_drug_id', $drugs_contra_drug->drug_id)->first()) {
            DB::table('drug_contra_drug')->insert(['drug_id' => $drugs_contra_drug->contra_drug_id, 'contra_drug_id'=>$drugs_contra_drug->drug_id, 'reason'=>$drugs_contra_drug->reason]);
        }
    }
    dd('finito');
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

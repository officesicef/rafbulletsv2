<?php

namespace App\Http\Controllers;

use App\Diagnose;
use App\Doctor;
use App\Drug;
use App\Examination;
use App\Patient;
use App\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function createExamination() {
        $symptoms = Symptom::all();
        $diagnoses = Diagnose::all();

        return view('theme.patient.index', compact('symptoms', 'diagnoses'));
    }

    public function index()
    {
        $examinations = Examination::with(['patient', 'diagnose'])->orderBy('created_at', 'desc')->get();
        return view('theme.examinations', compact('examinations'));
    }

    public function createTherapy(Request $request){
        $symptoms = Symptom::whereIn('id', $request->input('symptoms'))->get();
        $diagnose = Diagnose::find($request->input('diagnose'));
        $drug=Drug::all();

        $doctors = $this->getDrugsForDiagnose($request);

        return view('theme.patient.therapy', compact('drug', 'symptoms', 'diagnose', 'doctors'));
    }

    public function getDiagnosesForSymptoms(Request $request) {
        $symptoms = Symptom::whereIn('id', $request->input('symptoms'))->get();
        $symptomIds = $symptoms->pluck('id');

        $diagnoses = Diagnose::whereHas('symptoms', function ($query) use ($symptomIds) {
            $query->whereIn('symptom_id', $symptomIds);
        })->with(['symptoms'])->get();


        $diffSympts = new Collection();
        $diagnosesWithAllSimp = new Collection();
        foreach ($diagnoses as $diagnose) {
            $contains = true;
            foreach ($symptomIds as $symptomId) {
                if(!$diagnose->symptoms->contains($symptomId)) {
                    $contains = false;
                    break;
                }
            }
            if($contains) {
                $diagnosesWithAllSimp->push($diagnose);
            }
        }

        foreach ($diagnosesWithAllSimp as $item) {
            $item->differences = $item->symptoms->diff($symptoms)->pluck('name')->take(5)->implode(', ');
            $item->percent = round(count($symptomIds) / count($item->symptoms) * 100, 0) - random_int(1,24);
            if($item->percent < 0) {
                $item->percent = random_int(1,18);
            }
            $item->examinations_count = random_int(1,10);
        }
        return ($diagnosesWithAllSimp->sortByDesc('percent')->take(5)->values()->toArray());
    }

    public function getDrugsForDiagnose(Request $request) {
        $diagnose_id = $request->input('diagnose');
        $drugs = Drug::whereHas('diagnoses', function ($query) use($diagnose_id) {
            $query->where('diagnose_id', $diagnose_id);
        })->get();

        $doctors = Doctor::with('user')->get();
        $doctors = $doctors->shuffle();



        $i = 0;
        foreach ($doctors as $doctor) {
            $drs[] = $drugs->toArray()[$i];
            $i+= 1;
            if($i == count($drugs)) $i = 0;
            $drs[] = $drugs->toArray()[$i];
            $i+= 1;
            if($i == count($drugs)) $i = 0;
            $doctor->drugs = $drs;
            $drs = array();
            $doctor->slika = explode(' ', $doctor->user->name)[0].'.jpg';
            $doctor->broj = random_int(1, 200);
        }
        return $doctors;
    }

    public function checkContraDrugs($patientId, Request $request)
    {
        $examinations = Examination::where('patient_id', $patientId)->with('drugs')->get();
        $currentlyDrinking = $examinations->pluck('drugs')[0];

        $wannaDrink = Drug::whereIn('id', $request->input('drugs'))
            ->get();

        $notAllowed = DB::table('drug_contra_drug')->join('drugs', 'drug_contra_drug.drug_id', '=', 'drugs.id')
            ->whereIn('drug_id', $wannaDrink->pluck('id'))
            ->get();

        $idsNotAllowed = ($notAllowed->pluck('contra_drug_id')->intersect($currentlyDrinking->pluck('id')));
        return ($notAllowed->whereIn('contra_drug_id', $idsNotAllowed)->values()->toArray());


    }

    public function submit(Request $request)
    {
        $examination = new Examination();
        $examination->doctor_id = 1;
        $examination->patient_id = 1;
        $examination->diagnose_id = $request->input('diagnose');
        $examination->save();
        $examination->drugs()->sync($request->input('drugs'));
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Persecutor;
use App\Models\CrimeCharge;

use DB;


class DashboardController extends Controller
{
    public function summary()
    {
        $total_accuser = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('accuser', '=', '1')
        ->get()
        ->first();
        $total_complainant = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('complainant', '=', '1')
        ->get()
        ->first();
        $total_crimecharges = CrimeCharge::query()
        ->select(DB::raw('COUNT(crime_id) as total '))
        ->get()
        ->first();
        $total_lawyer = Persecutor::query()
        ->select(DB::raw('COUNT(persecutor_id) as total'))
        ->get()
        ->first();
        return view('dashboard', compact('total_accuser', 'total_complainant', 'total_crimecharges', 'total_lawyer'));
    }
}

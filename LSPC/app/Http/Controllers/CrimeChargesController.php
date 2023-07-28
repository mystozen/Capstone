<?php

namespace App\Http\Controllers;

use DB;

use App\Models\CrimeCharge;
use Illuminate\Http\Request;

class CrimeChargesController extends Controller
{
    public function crime()
    {
        $CrimeCharges = CrimeCharge::query()
            ->select('crime_id', 'classification', 'crime_charge')
            ->limit(20)
            ->get();
        $total_crimecharges = CrimeCharge::query()
            ->select(DB::raw('COUNT(crime_id) as total '))
            ->get()
            ->first();
        return view('crimecharge', compact('CrimeCharges', 'total_crimecharges'));

    }
}
<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Person;
use App\Models\CrimeCharge;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function accuser()
    {
        $accuser = person::query()
            ->select('first_name', 'last_name', 'province')
            ->where('accuser', '=', '1')
            ->orderBy('last_name')
            ->limit(20)
            ->get();
        $total_accuser = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('accuser', '=', '1')
        ->get()
        ->first();
        return view('accuser', compact('complainant', 'total_complainant'));
    }
    public function complainant()
    {
        $complainant = person::query()
        ->select('first_name', 'last_name', 'province')
        ->where('complainant', '=', '1')
        ->orderBy('last_name')
        ->limit(20)
        ->get();
        $total_complainant = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('complainant', '=', '1')
        ->get()
        ->first();
        
        return view('complainaant', compact('complainant', 'total_complainant'));
    }
}
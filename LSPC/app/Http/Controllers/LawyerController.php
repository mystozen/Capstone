<?php

namespace App\Http\Controllers;

use DB;


use App\Models\Persecutor;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function lawyer()
    {
        $lawyer = Persecutor::query()
            ->select('persecutor_id', 'first_name', 'last_name', 'position')
            ->orderBy('persecutor_id', 'desc')
            ->limit(8)
            ->get();
        $total_lawyer = Persecutor::query()
        ->select(DB::raw('COUNT(persecutor_id) as total'))
        ->get()
        ->first();
        return view('lawyer', compact('lawyer', 'total_lawyer'));
    }
}

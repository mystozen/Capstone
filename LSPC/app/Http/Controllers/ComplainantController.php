<?php

namespace App\Http\Controllers;

use DB;
use session;


use App\Models\Person;
use Illuminate\Http\Request;

class ComplainantController extends Controller
{
    public function registerComplainant()
    {
        return view('victimform');
    }

    public function showregisterComplainant(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|unique:persons,email_address',
            'mobile_number' => 'required'
        ]);
        $person = new person;
        $person->first_name = $request->input("first_name");
        $person->last_name = $request->input("last_name");
        $person->birthdate = $request->input("birthdate");
        $person->gender = $request->input("gender");
        $person->mobile_number = $request->input("mobile_number");
        $person->email_address = $request->input("email_address");
        $person->province = $request->input("province");
        $person->complainant = 1;
        $person->save();
   
        return redirect("/victim")->with('success', 'person has been added!');
    }
    public function complainant()
    {
        $complainant = person::query()
            ->select('person_id', 'first_name', 'last_name', 'province')
            ->where('complainant', '=', '1')
            ->orderBy('person_id', 'desc')
            ->limit(8)
            ->get();
        $total_complainant = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('complainant', '=', '1')
        ->get()
        ->first();
        return view('complainant', compact('complainant', 'total_complainant'));
    }
}
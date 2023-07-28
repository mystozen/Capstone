<?php

namespace App\Http\Controllers;

use DB;


use App\Models\Person;
use Illuminate\Http\Request;

class AccuserController extends Controller
{
    public function registerAccuser()
    {
        return view('suspectform');
    }

    public function showregisterAccuser(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
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
        $person->accuser = 1;
        $person->save();
   
        return redirect("/suspect")->with('success', 'person has been added!');
    }
    public function accuser()
    {
        $accuser = person::query()
            ->select('person_id', 'first_name', 'last_name', 'province')
            ->where('accuser', '=', '1')
            ->orderBy('person_id', 'desc')
            ->limit(8)
            ->get();
        $total_accuser = person::query()
        ->select(DB::raw('COUNT(person_id) as total'))
        ->where('accuser', '=', '1')
        ->get()
        ->first();
        return view('accuser', compact('accuser', 'total_accuser'));
    }
}
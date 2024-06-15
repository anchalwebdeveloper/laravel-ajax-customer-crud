<?php

namespace App\Http\Controllers;
use App\Models\{country,city,state};
use Illuminate\Http\Request;

class CountryStateCityController extends Controller
{
    public function index(){
     $data['countries'] = Country::get(['id', 'name']);
     return view('welcome', $data);
    }


    public function getState(Request $request){
        $data['states'] = State::where('country_id', $request->country_id)->get(['id', 'name']);
        return response()->json($data);

    }

    public function getCity(Request $request){
        $data['cities'] = City::where('state_id', $request->state_id)->get(['id', 'name']);
        return response()->json($data);

    }
    
}

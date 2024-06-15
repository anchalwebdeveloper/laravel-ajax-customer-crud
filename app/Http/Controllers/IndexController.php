<?php

namespace App\Http\Controllers;
use App\Models\member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    public function index(){
        return Member::with('getGroup')->get();
    }
}

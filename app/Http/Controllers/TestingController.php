<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
   public function demo(){

    $array= [
        [
        'name' => 'John',
        'age' => 25,
        'gender' =>'male'
        ],

        [
            'name' => 'divakar',
            'age' => 26,
            'gender' =>'male'
            ],
            [
                'name' => 'rita',
                'age' => 25,
                'gender' =>'female'
                ],

];
return response()->json([
 'message' => '3 users successfully created',
 'data' => $array,
 'status' => true
], 200);


   }



}

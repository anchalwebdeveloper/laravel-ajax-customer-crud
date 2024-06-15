<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function index(){


        $users = User::all();
   return response()->json([
    'messages' => count($users). ' users found',
       'data' => $users,
       'status' => true
         ], 200);

    }
}

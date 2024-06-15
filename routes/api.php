<?php

use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LDAP\ResultEntry;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('token-name')->plainTextToken;
        return response()->json(['token' => $token], 200);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
});

Route::get('/test', [TestingController::class, 'demo']);
Route::get('/users', [UserController::class, 'index']);


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//posts
//CRUD is basically

//1. get all (GET) /api/
//2. create a post (POST) /api
//3. get a single (GET) /api/___/ {id}
//4. update a single (PUT/PATCH) /api/___/{id}
//5, delete (DELETE) /api/___/{id}


Route::get('/vlog', function() {
    $log =Log::create([
        'log_id' => '1', 
        'log_type'=> '18s'
    ]);
    return $log;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

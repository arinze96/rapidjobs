<?php

use App\Http\Controllers\APICallsController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data", [APICallsController::class, 'allUsers']);
//pass praram to api
Route::get("data, {id}", [APICallsController::class, 'allUsersWithParams']);
//condition with route making the id optional
Route::get("data, {id?}", [APICallsController::class, 'allUsersWithParams']);
//apply condition with result

//POST METHOD
  Route::post("addCertificate", [APICallsController::class, 'addCertificate']);

//PUT METHOD
Route::put("updateCertificate", [APICallsController::class, 'updateCertificate']);

//SEARCH
Route::get("searchCompany/{company}", [APICallsController::class, 'searchCompany']);

//DELETE
Route::get("deleteCompany/{id}", [APICallsController::class, 'deleteCompany']);


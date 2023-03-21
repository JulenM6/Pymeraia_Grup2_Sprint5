<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ReportController;
use App\Models\Question;
use App\Models\Questionnaire;


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
Route::resource('question',QuestionController::class)->except(['show']);

Route::get('kivy/json', [QuestionnaireController::class, 'indexmobil']);

Route::get('kivy/json/{id}/', [QuestionnaireController::class, 'indexmobilID']);

Route::get('kivy/report', [ReportController::class, 'indexmobil']);

Route::get('kivy/report/{id}/', [ReportController::class, 'indexmobilID']);

// para que vaya la kivy app
Route::middleware('auth:sanctum')->get('/loginPhone', function (Request $request) {
    return $request->user();
});

Route::get('kivy/question', [QuestionController::class, 'indexmobil']);

Route::get('kivy/question/{id}/', [QuestionController::class, 'indexmobilID']);
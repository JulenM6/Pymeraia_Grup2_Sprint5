<?php

use App\Http\Controllers\AnswerControler;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\QuestionnaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\QuestionController;
use App\Models\Risk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Grup de rutes per a CRUD Informe */
Route::resource('report', ReportController::class);
Route::get('/report/{id}/pdf', [ReportController::class, 'pdf'])->name('report.pdf');


/* Grup de rutes per a CRUD Respostes */
Route::resource('answer', QuestionController::class);

//Question ROUTES
Route::resource('question', QuestionController::class)->except(['show']);
Route::get('/question/{id}/activate', [QuestionController::class, 'activate'])->name('question.activate');
Route::get('/question/{id}/unActivate', [QuestionController::class, 'unActivate'])->name('question.unActivate');
Route::get('question/hidden', [QuestionController::class, 'hidden'])->name('question.hidden');

//Questionnaire ROUTES
Route::resource('questionnaire', QuestionnaireController::class)->except(['show']);
Route::get('questionnaire/hidden', [QuestionnaireController::class, 'hidden'])->name('questionnaire.hidden');
Route::get('questionnaire/{id}/activate', [QuestionnaireController::class, 'activate'])->name('questionnaire.activate');
Route::get('questionnaire/{id}/unActivate', [QuestionnaireController::class, 'unActivate'])->name('questionnaire.unActivate');
Route::post('questionnaire/{questionnaire}/updateQuestion', [QuestionnaireController::class, 'updateQuestion'])->name('questionnaire.updateQuestion');
Route::post('questionnaire/{questionnaire}/assignQuestion', [QuestionnaireController::class, 'assignQuestion'])->name('questionnaire.assignQuestion');
Route::post('questionnaire/{questionnaire}/unassignQuestion', [QuestionnaireController::class, 'unassignQuestion'])->name('questionnaire.unassignQuestion');

//Audits ROUTES
Route::get('/audit', [AuditController::class, 'index'])->name('audit.index');
Route::get('/audit/{id}', [AuditController::class, 'show'])->name('audit.survey');
Route::post('/audit/save/{id}', [AuditController::class, 'store'])->name('audit.store');

// Languague ROUTES
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;

Route::get('/', function (){
    return view('login');
});

Route::get('/show', [SubjectController::class, 'show']);
Route::get('/subjects', [SubjectController::class, 'subjects']);
Route::get('/feedback', [SubjectController::class, 'feedback']);

Route::get('/admin/dashboard', [AdminController::class, 'adminview']);
Route::get('/admin/feedback/store', [AdminController::class, 'adminsubjectview']);

Route::get('/feedback-chart', [AdminController::class, 'showFeedbackChart']);

//subjectcodes
//2ND SEM - 2021
Route::get('/admin/report/HS3251', [ReportController::class, 'HS3251']);
Route::get('/admin/report/MA3251', [ReportController::class, 'MA3251']);
Route::get('/admin/report/PH3256', [ReportController::class, 'PH3256']);
Route::get('/admin/report/BE3251', [ReportController::class, 'BE3251']);
Route::get('/admin/report/GE3251', [ReportController::class, 'GE3251']);
Route::get('/admin/report/CS3251', [ReportController::class, 'CS3251']);
Route::get('/admin/report/GE3252', [ReportController::class, 'GE3252']);
Route::get('/admin/report/GE3271', [ReportController::class, 'GE3271']);
Route::get('/admin/report/CS3271', [ReportController::class, 'CS3271']);
Route::get('/admin/report/GE3272', [ReportController::class, 'GE3272']);
//4TH SEM - 2021

Route::get('/admin/report/CS3452', [ReportController::class, 'CS3452']);
Route::get('/admin/report/CS3491', [ReportController::class, 'CS3491']);
Route::get('/admin/report/CS3492', [ReportController::class, 'CS3492']);
Route::get('/admin/report/CS3401', [ReportController::class, 'CS3401']);
Route::get('/admin/report/CS3451', [ReportController::class, 'CS3451']);
Route::get('/admin/report/GE3451', [ReportController::class, 'GE3451']);
Route::get('/admin/report/CS3461', [ReportController::class, 'CS3461']);
Route::get('/admin/report/CS3481', [ReportController::class, 'CS3481']);

// 6TH SEM - 2017
Route::get('/admin/report/CS8651', [ReportController::class, 'CS8651']);
Route::get('/admin/report/CS8691', [ReportController::class, 'CS8691']);
Route::get('/admin/report/CS8601', [ReportController::class, 'CS8601']);
Route::get('/admin/report/CS8602', [ReportController::class, 'CS8602']);
Route::get('/admin/report/CS8603', [ReportController::class, 'CS8603']);
Route::get('/admin/report/CS8661', [ReportController::class, 'CS8661']);
Route::get('/admin/report/CS8662', [ReportController::class, 'CS8662']);
Route::get('/admin/report/CS8662', [ReportController::class, 'CS8662']);

//8th sem - 2017
Route::get('/admin/report/CS8811', [ReportController::class, 'CS8811']);
Route::get('/admin/report/ProfessionalElectiveIV', [ReportController::class, 'ProfessionalElectiveIV']);
Route::get('/admin/report/ProfessionalElectiveV', [ReportController::class, 'ProfessionalElectiveV']);

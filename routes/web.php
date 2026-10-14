<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;

// Route::get('/dashboard', [

//     DashboardController::class,
//     'dashboardView'
// ])->name('dashboard.index');

Route::view('/', 'welcome')->name('welcome');

Route::get('/complaint', [

    ComplaintController::class,
    'complaintForm'
])->name('complaint.create');

Route::post('/complaint', [

    ComplaintController::class,
    'complaintFormSave'
])->name('Complaint.complaintFormSave');
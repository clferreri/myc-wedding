<?php

use App\Http\Controllers\Back\Auth\LoginController;
use App\Http\Controllers\Back\CommunicationController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\GroupsController;
use App\Http\Controllers\Back\GuestsController;
use App\Http\Controllers\Back\InvitationsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:backoffice']], function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard.form');

    Route::get('/groups', [GroupsController::class, 'show'])->name('groups.form');

    Route::get('/guests', [GuestsController::class, 'show'])->name('guests.list');
    Route::post('/guests/upload', [GuestsController::class, 'uploadFile'])->name('guest.upload');

    Route::get('/communications', [CommunicationController::class, 'show'])->name('communication.list');
    Route::post('/communications/store', [CommunicationController::class, 'store'])->name('communication.store');
    Route::post('/communications/send', [CommunicationController::class, 'send'])->name('communication.send');
    Route::delete('/communications', [CommunicationController::class, 'send'])->name('communication.delete');
    //Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice.index');

    Route::get('/invitations', [InvitationsController::class, 'show'])->name('invitation.list');
});

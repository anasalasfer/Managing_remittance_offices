<?php

use App\Http\Controllers\OfficeAuth\AuthenticatedSessionController;
use App\Http\Controllers\OfficeAuth\ConfirmablePasswordController;
use App\Http\Controllers\OfficeAuth\EmailVerificationNotificationController;
use App\Http\Controllers\OfficeAuth\EmailVerificationPromptController;
use App\Http\Controllers\OfficeAuth\NewPasswordController;
use App\Http\Controllers\OfficeAuth\PasswordController;
use App\Http\Controllers\OfficeAuth\PasswordResetLinkController;
use App\Http\Controllers\OfficeAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:Office')->group(function () {

    Route::get('Office/login', [AuthenticatedSessionController::class, 'create'])
                ->name('Office.login');

    Route::post('Office/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('Office/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('Office.password.request');

    Route::post('Office/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('Office.password.email');

    Route::get('Office/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('Office.password.reset');

    Route::post('Office/reset-password', [NewPasswordController::class, 'store'])
                ->name('Office.password.store');
});

Route::middleware('auth:Office')->group(function () {
    Route::get('Office/verify-email', EmailVerificationPromptController::class)
                ->name('Office.verification.notice');

    Route::get('Office/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('Office.verification.verify');

    Route::post('Office/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('Office.verification.send');

    Route::get('Office/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('Office.password.confirm');

    Route::post('Office/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('Office/password', [PasswordController::class, 'update'])->name('Office.password.update');

    Route::post('Office/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('Office.logout');
});

<?php

use App\Modules\BlogManagement\Blog\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('blogs', Controller::class);
    Route::post('blogs/bulk-action', [Controller::class, 'bulkAction']);
});
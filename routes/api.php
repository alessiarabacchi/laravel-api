<?php

use App\Http\Controllers\Api\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);


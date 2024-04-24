<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;

Route::get('dummies', [DummyController::class, 'index']);

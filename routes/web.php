<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyTreeController;

Route::get('/family-tree', [FamilyTreeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

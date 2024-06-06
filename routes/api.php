<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('books', BookController::class, [
    'only' => [
        'index',
        'show'
    ]
]);

Route::resource('books', BookController::class, [
    'except' => [
        'index',
        'show'
    ]
])->middleware(['auth:api']);

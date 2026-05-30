<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    Route::get('/products', [ProductController::class, 'index']);
}

<?php

// routes/web.php
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);


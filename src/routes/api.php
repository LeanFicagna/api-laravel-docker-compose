<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\CampaignController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ok', function() {
    return ['status' => true];
});

Route::apiResource('city', CityController::class);

Route::apiResource('group', GroupController::class);

Route::apiResource('product', ProductController::class);

Route::apiResource('discount', DiscountController::class);

Route::apiResource('campaign', CampaignController::class);
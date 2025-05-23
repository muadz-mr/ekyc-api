<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Ekyc')->group(function() {
    Route::post('/analyse-id', 'AnalyseDocumentController');
    Route::post('/verify-selfie', 'VerifySelfieController');
});

Route::get('/enum/document-type', 'EnumController@documentType');
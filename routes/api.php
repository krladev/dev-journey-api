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

// TODO: Protect routes with JWT
Route::get('skills', 'App\Http\Controllers\SkillsController@list');
Route::get('skills/{id}', 'App\Http\Controllers\SkillsController@getById');
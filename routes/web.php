<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [listingController::class, 'index']);

Route::get('/findlisting/{id}', [listingController::class, 'show']);


Route::get('/hello', function () {
    return response('<h1>Hello Dev</h1>')
        ->header('Content-Type', 'text/html')
        ->header('key', '123@');
});

Route::get('/posts/{id}', function($id) {
    return response('posts - '. $id);
}) ->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    return $request -> name . ' ' . $request -> city; 
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/findlisting/{id}', function($id) {
    return view('listing',
    ['foundlisting' => Listing::find($id)
    
]);
});


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
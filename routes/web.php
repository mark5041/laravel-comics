<?php

use Illuminate\Support\Facades\Route;

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
    $data = ['comics' => config('comics'), 'products' => config('products'), 'social' => config('social'), 'url' => '../../../img/'];
    return view('guest.main', $data);
})->name('home');

Route::get('details/{id}', function ($id) {

    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }

    $data = [
        'comic' => $singleComic, 
        'products' => config('products'), 
        'social' => config('social'),  
        'shop' => config('shop'), 
        'url' => '../../../img/'
    ];

    return view('guest.comic_main', $data);

})->name('details');







Auth::routes();



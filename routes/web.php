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

Route::get('/', function() {
    return view('index', [
        'title' => 'CRYPTO TO THE MOON 🚀🚀🚀',
        'caption' => 'We got diamond hands 💎🙌',
        'cryptoselected' => ['ETC','DOGE','BTC'],
        'currencyselected' => ['USD','EUR']
    ]);
});
Route::get('/actioncomics', function () {
    $datiActioncomics = config("pasta");

    $datiView = [
        "actioncomicsList" => $datiActioncomics
    ];
    return view("actioncomics", $datiView );
})->name("page-actioncomics");

Route::get('/americanvampire', function () {
    return view("americanvampire");
})->name("page-americanvampire");


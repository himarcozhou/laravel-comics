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
    return view('index');
});
// Route::get('/actioncomics', function () {
//     $datiActioncomics = config("pasta");

//     $datiView = [
//         "actioncomicsList" => $datiActioncomics
//     ];
//     return view("actioncomics", $datiView );
// })->name("page-actioncomics");


Route::get('/', function () {

    //get comics list
    $comics = config('comics');
    
    $datiView = [
        "actioncomicsList" => $comics,
    ];
    return view("index", $datiView);
})->name('index');
//usiamo compact per far vedere l'array comics
//     return view('index', compact('comics'));
// })->name('index');



//Non penso che serva ma boh

// Route::get('/actioncomics', function () {
//     return view("actioncomics");
// })->name("page-actioncomics");

// Route::get('/americanvampire', function () {
//     return view("americanvampire");
// })->name("page-americanvampire");


// Route::get('/aquaman', function () {
//     return view("aquaman");
// })->name("page-aquaman");

// Route::get('/batgirl', function () {
//     return view("batgirl");
// })->name("page-batgirl");

// Route::get('/batman', function () {
//     return view("batman");
// })->name("page-batman");

// Route::get('/batman_beyond', function () {
//     return view("batman_beyond");
// })->name("page-batman_beyond");

// Route::get('/batman-superman', function () {
//     return view("batman-superman");
// })->name("page-batman-superman");

// Route::get('/batman-superman_annual', function () {
//     return view("batman-superman_annual");
// })->name("page-batman-superman_annual");

// Route::get('/thejoker', function () {
//     return view("thejoker");
// })->name("page-thejoker");

// Route::get('/3joker', function () {
//     return view("3joker");
// })->name("page-3joker");

// Route::get('/whiteknight', function () {
//     return view("whiteknight");
// })->name("page-whiteknight");

// Route::get('/catwoman', function () {
//     return view("catwoman");
// })->name("page-catwoman");


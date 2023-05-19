<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pages.page_1');
})->name('p1');


Route::get('formation', function () {
return view('pages.page_2');
})->name('p2');


Route::get('ifnti', function () {
return view('pages.page_3');
})->name('p3');

Route::get('matieres', function () {
return view('pages.page_4');
})->name('p4');

Route::get('matieres-generales', function () {
return view('pages.page_5');
})->name('p5');

Route::get('equipe', function () {
return view('pages.page_6');
})->name('p6');

Route::get('projet-etudiant', function () {
return view('pages.page_7');
})->name('p7');


Route::get('diplome', function () {
return view('pages.page_8');
})->name('p8');

Route::get("actualite", function () {
return view('pages.page_9');
})->name('p9');

Route::get("contacter", function () {
return view('pages.page_10');
})->name('p10');

Route::get("procedure-inscription", function () {
return view('pages.page_11');
})->name('p11');

Route::get("inscription-concours", function () {
return view('pages.page_12');
})->name('p12');

Route::get("cout-formation", function () {
return view('pages.page_13');
})->name('p13');



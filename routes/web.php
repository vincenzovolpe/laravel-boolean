<?php

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
    return view('home');
})->name('homepage');

Route::get('corso', function () {
    return view('corso');
})->name('corsoboolean');

Route::get('carriere', function () {
    return view('carriere');
})->name('carriereboolean');

Route::get('lezione', function () {
    return view('lezione');
})->name('lezioneboolean');

Route::get('iscrizione', function () {
    return view('iscrizione');
})->name('iscrizioneboolean');


Route::get('faq', function () {
    $data = ['lista_faq_sx' => config('faq.faqs_sx'),
             'lista_faq_dx' => config('faq.faqs_dx')];
    return view('faq', $data);
})->name('pagina-faq');

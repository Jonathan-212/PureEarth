<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/education/{id}', function (Request $request) {
    return view('education-detail')->with('education', $request->id);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact-whatsapp', function (Request $request) {
    $message = urlencode("Hi, I'm " .  $request->name . "!\n" . $request->message . "\n\nEmail: " . $request->email);
    return redirect('https://wa.me/6282115525343?text=' . $message);
});

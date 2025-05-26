<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
})->name('home');

Route::get('/reminders', function () {
    return view('reminders.index');
})->name('reminders.index');

Route::get('/knowledge', function () {
    return view('knowledge.index');
})->name('knowledge.index');

Route::get('/usage', function () {
    return view('usage.index');
})->name('usage.index');

Route::get('/language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ru'])) {
        abort(400);
    }
    return back()->withCookie(cookie()->forever('locale', $locale));
})->name('language.switch');
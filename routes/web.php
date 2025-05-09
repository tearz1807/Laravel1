<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-page-content.welcome');
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
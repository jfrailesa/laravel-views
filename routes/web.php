<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/variable', function () {
    $message = "Welcome to the Zoo!";
    return view('variable', compact('message'));
});


Route::get('/array', function () {
    $animals = ['Lion', 'Elephant', 'Giraffe', 'Zebra', 'Monkey'];
    return view('array', compact('animals'));
});


Route::get('/array/{id}', function ($id) {
    $animals = ['Lion', 'Elephant', 'Giraffe', 'Zebra', 'Monkey'];

    // Handle invalid IDs
    if (!isset($animals[$id])) {
        abort(404, 'Animal not found');
    }

    return view('array-id', compact('animals', 'id'));
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('admin.home');
});


Route::get('/users', function () {
    return view('admin.pengguna');
});

Route::get('/usersDetail', function () {
    return view('admin.pengguna');
});

Route::get('/usersResetPassword', function () {
    return view('admin.pengguna');
});
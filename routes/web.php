<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/index',[
        'title' => 'Cheesecool University '
    ]);
});

Route::get('/team', function () {
    return view('/team',[
        'title' => 'The Developer | Team '
    ]);
});

Route::get('/template-1', function () {
    return view('/template-1',[
        'title' => 'Template 1'
    ]);
});

Route::get('/template-2', function () {
    return view('/template-2',[
        'title' => 'Template 2'
    ]);});

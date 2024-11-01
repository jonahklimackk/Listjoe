<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listjoe');
});



Route::get('/go', function () {
    return redirect()->away('https://hop.clickbank.net/?affiliate=l1STJOE&vendor=socialsrep&pid=joblandingpage&ifso=304paidtotype');
});

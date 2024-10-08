<?php

use App\Models\Pemain;
use Database\Seeders\listPemain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $pemains = Pemain::all();
    return view('pemain', compact('pemains'));
});
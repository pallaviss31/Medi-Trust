<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\User\Dashboard;

    Route::get('/', Dashboard::class)->name('dashboard');
 
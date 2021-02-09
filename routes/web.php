<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/blog', BlogComponent::class)->name('blog');

/** User*/
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/usuario/painel', UserDashboardComponent::class)->name('user.dashboard');
});

/** Admin */
Route::middleware(['auth:sanctum', 'verified', 'isadmin'])->group(function(){
    Route::get('/admin/painel', AdminDashboardComponent::class)->name('admin.dashboard');
});


<?php

use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
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
Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'isadmin'])->group(function(){

    //User
    Route::any('users/search', [UserController::class, 'search'])->name('users.search');
    Route::resource('users', UserController::class);

    //Team
    Route::any('teams/search', [UserController::class, 'search'])->name('teams.search');
    Route::resource('teams', TeamController::class);

    //Post
    Route::any('posts/search', [UserController::class, 'search'])->name('posts.search');
    Route::resource('posts', PostController::class);
});


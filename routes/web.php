<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\admin\users\LoginController;
use \App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\MenuController;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', [MainController::class, 'index']) ->name('admin');
        Route::get('/main', [MainController::class, 'index']);
        #Menu
        Route::prefix('menus')->group(function(){
            Route::get('add',[MenuController::class, 'create']);
            // Route::POST('add',[MenuController::class, 'store']);
        });
        
        Route::prefix('menus')->group(function(){
            Route::get('add',[MenuController::class, 'detail']);
            // Route::POST('add',[MenuController::class, 'store']);
        });
    });
});

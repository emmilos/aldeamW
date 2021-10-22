<?php

use App\Models\Client;
use App\Models\credit;
use App\Models\Article;
use App\Models\TypeArticle;
use App\Http\Livewire\Utilisateurs;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\TypeCreditComp;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TypeArticleComp;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Le groupe des routes relatives aux administrateurs uniquement
Route::group([
    "middleware" => ["auth", "auth.admin"],
    'as' => 'admin.'
], function(){

    Route::group([
        "prefix" => "habilitations",
        'as' => 'habilitations.'
    ], function(){

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });

    Route::group([
        "prefix" => "gestarticles",
        'as' => 'gestarticles.'
    ], function(){

        Route::get("/typearticles", TypeArticleComp::class)->name("typearticles");

    });


    Route::group([
        "prefix" => "gestcredits",
        'as' => 'gestcredits.'
    ], function(){

        Route::get("/typeCredits", TypeCreditComp::class)->name("typecredit");

    });



});


    Route::get('/credit', function() {
          return Article::all();;
    });

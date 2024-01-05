<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product3Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\PersonneController;

use App\Http\Controllers\Product4Controller;

use App\Http\Controllers\CustomAuthController; 

use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\Product5Controller;
//product5
Route::get('/product5', [Product5Controller::class, 'index'])->name('product5.index');
Route::get('/product5/create', [Product5Controller::class, 'create'])->name('product5.create');
Route::post('/product5', [Product5Controller::class, 'store'])->name('product5.store');
Route::get('/product5/{product5}/edit', [Product5Controller::class, 'edit'])->name('product5.edit');
Route::put('/product5/{product5}/update', [Product5Controller::class, 'update'])->name('product5.update');
Route::delete('/product5/{product5}/destroy', [Product5Controller::class, 'destroy'])->name('product5.destroy');

//produit1
Route::get('/product1', [Product1Controller::class, 'index'])->name('product1.index');
Route::get('/product1/create', [Product1Controller::class, 'create'])->name('product1.create');
Route::post('/product1', [Product1Controller::class, 'store'])->name('product1.store');
Route::get('/product1/{product1}/edit', [Product1Controller::class, 'edit'])->name('product1.edit');
Route::put('/product1/{product1}/update', [Product1Controller::class, 'update'])->name('product1.update');
Route::delete('/product1/{product1}/destroy', [Product1Controller::class, 'destroy'])->name('product1.destroy');

//11111111111111111111111111111111111111

Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');  
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');               //Route::get('/login',[CustomAuthController::class,'login']);         // 111111111111111111
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn'); //Route::get('/registration',[CustomAuthController::class,'registration']);   // 11111111111
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');       //222222222222222222222222222222
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');                //4444444444444444444444
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');            //Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/product4', [Product4Controller::class, 'index'])->name('product4.index')->middleware('isLoggedIn');
Route::get('/product4/create', [Product4Controller::class, 'create'])->name('product4.create')->middleware('isLoggedIn');
Route::post('/product4', [Product4Controller::class, 'store'])->name('product4.store')->middleware('isLoggedIn');
Route::get('/product4/{product4}/edit', [Product4Controller::class, 'edit'])->name('product4.edit')->middleware('isLoggedIn');
Route::put('/product4/{product4}/update', [Product4Controller::class, 'update'])->name('product4.update')->middleware('isLoggedIn');
Route::delete('/product4/{product4}/destroy', [Product4Controller::class, 'destroy'])->name('product4.destroy')->middleware('isLoggedIn');


Route::get('/personne/rechercher-personnes', [PersonneController::class, 'searchForm'])->name('rechercher_personnes')->middleware('isLoggedIn');
Route::post('/personne/resultats-recherche', [PersonneController::class, 'searchResults'])->name('resultats_recherche')->middleware('isLoggedIn');

Route::delete('/personne/supprimer-personne/{id}', [PersonneController::class, 'deletePerson'])->name('supprimer_personne')->middleware('isLoggedIn');

Route::get('/personne/modifier-personne/{id}', [PersonneController::class, 'editForm'])->name('modifier_personne')->middleware('isLoggedIn');
Route::put('/personne/enregistrer-modification/{id}', [PersonneController::class, 'saveEdit'])->name('enregistrer_modification')->middleware('isLoggedIn');

Route::get('/personne/ajouter-personne', [PersonneController::class, 'createForm'])->middleware('isLoggedIn');
Route::post('/personne/enregistrer-personne', [PersonneController::class, 'saveForm'])->middleware('isLoggedIn');
Route::get('/personne/liste-personnes', [PersonneController::class, 'list'])->name('liste_personnes')->middleware('isLoggedIn');
//
Route::get('/product2', [Product2Controller::class, 'index'])->name('product2.index')->middleware('isLoggedIn');
Route::get('/product2/create', [Product2Controller::class, 'create'])->name('product2.create')->middleware('isLoggedIn');
Route::post('/product2', [Product2Controller::class, 'store'])->name('product2.store')->middleware('isLoggedIn');
Route::get('/product2/{product2}/edit', [Product2Controller::class, 'edit'])->name('product2.edit')->middleware('isLoggedIn');
Route::put('/product2/{product2}/update', [Product2Controller::class, 'update'])->name('product2.update')->middleware('isLoggedIn');
Route::delete('/product2/{product2}/destroy', [Product2Controller::class, 'destroy'])->name('product2.destroy')->middleware('isLoggedIn');
//
Route::get('/product3', [Product3Controller::class, 'index'])->name('product3.index')->middleware('isLoggedIn')->middleware('isLoggedIn');
Route::get('/product3/create', [Product3Controller::class, 'create'])->name('product3.create')->middleware('isLoggedIn')->middleware('isLoggedIn');
Route::post('/product3', [Product3Controller::class, 'store'])->name('product3.store')->middleware('isLoggedIn')->middleware('isLoggedIn');
Route::get('/product3/{product3}/edit', [Product3Controller::class, 'edit'])->name('product3.edit')->middleware('isLoggedIn');
Route::put('/product3/{product3}/update', [Product3Controller::class, 'update'])->name('product3.update')->middleware('isLoggedIn');
Route::delete('/product3/{product3}/destroy', [Product3Controller::class, 'destroy'])->name('product3.destroy')->middleware('isLoggedIn');

    Route::get('/', function () {
        return view('index'); //( dossier products + fichier index.blade.php)
        });
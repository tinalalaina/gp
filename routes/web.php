<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product3Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\PersonneController;

use App\Http\Controllers\Product4Controller;

use App\Http\Controllers\CustomAuthController; 

use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\Product5Controller;
use App\Http\Controllers\Product6Controller;
use App\Http\Controllers\product7Controller;
use App\Http\Controllers\Product8Controller;
use App\Http\Controllers\Product9Controller;
//produit9
Route::get('/product9', [Product9Controller::class, 'index'])->name('product9.index');
Route::get('/product9/create', [Product9Controller::class, 'create'])->name('product9.create');
Route::post('/product9', [Product9Controller::class, 'store'])->name('product9.store');
Route::get('/product9/{product9}/edit', [Product9Controller::class, 'edit'])->name('product9.edit');
Route::put('/product9/{product9}/update', [Product9Controller::class, 'update'])->name('product9.update');
Route::delete('/product9/{product9}/destroy', [Product9Controller::class, 'destroy'])->name('product9.destroy');

//produit8
Route::get('/product8', [Product8Controller::class, 'index'])->name('product8.index');
Route::get('/product8/create', [Product8Controller::class, 'create'])->name('product8.create');
Route::post('/product8', [Product8Controller::class, 'store'])->name('product8.store');
Route::get('/product8/{product8}/edit', [Product8Controller::class, 'edit'])->name('product8.edit');
Route::put('/product8/{product8}/update', [Product8Controller::class, 'update'])->name('product8.update');
Route::delete('/product8/{product8}/destroy', [Product8Controller::class, 'destroy'])->name('product8.destroy');

//produit7
Route::get('/Product7', [product7Controller::class, 'index'])->name('Product7.index')->middleware('isLoggedIn');
Route::get('/Product7/create', [product7Controller::class, 'create'])->name('Product7.create')->middleware('isLoggedIn');
Route::post('/Product7', [product7Controller::class, 'store'])->name('Product7.store')->middleware('isLoggedIn');
Route::get('/Product7/{Product7}/edit', [product7Controller::class, 'edit'])->name('Product7.edit')->middleware('isLoggedIn');
Route::put('/Product7/{Product7}/update', [product7Controller::class, 'update'])->name('Product7.update')->middleware('isLoggedIn');
Route::delete('/Product7/{Product7}/destroy', [product7Controller::class, 'destroy'])->name('Product7.destroy')->middleware('isLoggedIn');

//produit6
Route::get('/product6', [Product6Controller::class, 'index'])->name('product6.index')->middleware('isLoggedIn');
Route::get('/product6/create', [Product6Controller::class, 'create'])->name('product6.create')->middleware('isLoggedIn');
Route::post('/product6', [Product6Controller::class, 'store'])->name('product6.store')->middleware('isLoggedIn');
Route::get('/product6/{product6}/edit', [Product6Controller::class, 'edit'])->name('product6.edit')->middleware('isLoggedIn');
Route::put('/product6/{product6}/update', [Product6Controller::class, 'update'])->name('product6.update')->middleware('isLoggedIn');
Route::delete('/product6/{product6}/destroy', [Product6Controller::class, 'destroy'])->name('product6.destroy')->middleware('isLoggedIn');

//product5
Route::get('/product5', [Product5Controller::class, 'index'])->name('product5.index')->middleware('isLoggedIn');
Route::get('/product5/create', [Product5Controller::class, 'create'])->name('product5.create')->middleware('isLoggedIn');
Route::post('/product5', [Product5Controller::class, 'store'])->name('product5.store')->middleware('isLoggedIn');
Route::get('/product5/{product5}/edit', [Product5Controller::class, 'edit'])->name('product5.edit')->middleware('isLoggedIn');
Route::put('/product5/{product5}/update', [Product5Controller::class, 'update'])->name('product5.update')->middleware('isLoggedIn');
Route::delete('/product5/{product5}/destroy', [Product5Controller::class, 'destroy'])->name('product5.destroy')->middleware('isLoggedIn');

//produit1
Route::get('/product1', [Product1Controller::class, 'index'])->name('product1.index')->middleware('isLoggedIn');
Route::get('/product1/create', [Product1Controller::class, 'create'])->name('product1.create')->middleware('isLoggedIn');
Route::post('/product1', [Product1Controller::class, 'store'])->name('product1.store')->middleware('isLoggedIn');
Route::get('/product1/{product1}/edit', [Product1Controller::class, 'edit'])->name('product1.edit')->middleware('isLoggedIn');
Route::put('/product1/{product1}/update', [Product1Controller::class, 'update'])->name('product1.update')->middleware('isLoggedIn');
Route::delete('/product1/{product1}/destroy', [Product1Controller::class, 'destroy'])->name('product1.destroy')->middleware('isLoggedIn');

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
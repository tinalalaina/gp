<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product3Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\PersonneController;

Route::get('/personne/rechercher-personnes', [PersonneController::class, 'searchForm'])->name('rechercher_personnes');
Route::post('/personne/resultats-recherche', [PersonneController::class, 'searchResults'])->name('resultats_recherche');

Route::delete('/personne/supprimer-personne/{id}', [PersonneController::class, 'deletePerson'])->name('supprimer_personne');

Route::get('/personne/modifier-personne/{id}', [PersonneController::class, 'editForm'])->name('modifier_personne');
Route::put('/personne/enregistrer-modification/{id}', [PersonneController::class, 'saveEdit'])->name('enregistrer_modification');

Route::get('/personne/ajouter-personne', [PersonneController::class, 'createForm']);
Route::post('/personne/enregistrer-personne', [PersonneController::class, 'saveForm']);
Route::get('/personne/liste-personnes', [PersonneController::class, 'list'])->name('liste_personnes');
//
Route::get('/product2', [Product2Controller::class, 'index'])->name('product2.index');
Route::get('/product2/create', [Product2Controller::class, 'create'])->name('product2.create');
Route::post('/product2', [Product2Controller::class, 'store'])->name('product2.store');
Route::get('/product2/{product2}/edit', [Product2Controller::class, 'edit'])->name('product2.edit');
Route::put('/product2/{product2}/update', [Product2Controller::class, 'update'])->name('product2.update');
Route::delete('/product2/{product2}/destroy', [Product2Controller::class, 'destroy'])->name('product2.destroy');
//
Route::get('/product3', [Product3Controller::class, 'index'])->name('product3.index');
Route::get('/product3/create', [Product3Controller::class, 'create'])->name('product3.create');
Route::post('/product3', [Product3Controller::class, 'store'])->name('product3.store');
Route::get('/product3/{product3}/edit', [Product3Controller::class, 'edit'])->name('product3.edit');
Route::put('/product3/{product3}/update', [Product3Controller::class, 'update'])->name('product3.update');
Route::delete('/product3/{product3}/destroy', [Product3Controller::class, 'destroy'])->name('product3.destroy');

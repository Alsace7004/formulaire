<?php

use Illuminate\Support\Facades\Route;
use Alsace7004\Formulaire\Controllers\FormulaireController;



Route::middleware(['guest', 'web'])->group(function () {
	// your package routes
    Route::get('/contact',[FormulaireController::class,'index'])->name('contact.index');
    Route::post('/contact/create',[FormulaireController::class,'store'])->name('contact.store');    
});

?>
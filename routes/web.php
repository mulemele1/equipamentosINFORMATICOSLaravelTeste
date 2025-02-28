<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamplateController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\SistemaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('/', [TamplateController::class,'index']);

route::get('/logout', [TamplateController::class,'logout']);

route::get('/home', [TamplateController::class,'home']);


route::get('/create_maquina', [TamplateController::class,'create_maquina'])->name('create_maquina');
route::post('/add_maquina', [TamplateController::class,'add_maquina'])->name('add_maquina');
route::get('/view_maquina', [TamplateController::class,'view_maquina'])->name('view_maquina');
route::get('/delete_maquina/{id}', [TamplateController::class,'delete_maquina'])->name('delete_maquina');
route::get('/update_maquina/{id}', [TamplateController::class,'update_maquina'])->name('update_maquina');
route::post('/edit_maquina/{id}', [TamplateController::class,'edit_maquina'])->name('edit_maquina');
route::get('/details_maquina/{id}', [TamplateController::class,'details_maquina'])->name('details_maquina');

route::get('/create_marca', [MarcaController::class,'create_marca']);
route::post('/add_marca', [MarcaController::class,'add_marca']);
route::get('/list_marca', [MarcaController::class,'list_marca']);
route::get('/delete_marca/{id}', [MarcaController::class,'delete_marca']);
route::get('/update_marca/{id}', [MarcaController::class,'update_marca']);
route::post('/edit_marca/{id}', [MarcaController::class,'edit_marca']);
route::get('/details_marca/{id}', [MarcaController::class,'details_marca']);

route::get('/create_local', [LocalController::class,'create_local']);
route::post('/add_local', [LocalController::class,'add_local']);
route::get('/list_local', [LocalController::class,'list_local']);
route::get('/delete_local/{id}', [LocalController::class,'delete_local']);
route::get('/update_local/{id}', [LocalController::class,'update_local']);
route::post('/edit_local/{id}', [LocalController::class,'edit_local']);
route::get('/details_local/{id}', [LocalController::class,'details_local']);

route::get('/create_estado', [EstadoController::class,'create_estado']);
route::post('/add_estado', [EstadoController::class,'add_estado']);
route::get('/list_estado', [EstadoController::class,'list_estado']);
route::get('/delete_estado/{id}', [EstadoController::class,'delete_estado']);
route::get('/update_estado/{id}', [EstadoController::class,'update_estado']);
route::post('/edit_estado/{id}', [EstadoController::class,'edit_estado']);
route::get('/details_estado/{id}', [EstadoController::class,'details_estado']);

route::get('/create_sistema', [SistemaController::class,'create_sistema']);
route::post('/add_sistema', [SistemaController::class,'add_sistema']);
route::get('/list_sistema', [SistemaController::class,'list_sistema']);
route::get('/delete_sistema/{id}', [SistemaController::class,'delete_sistema']);
route::get('/update_sistema/{id}', [SistemaController::class,'update_sistema']);
route::post('/edit_sistema/{id}', [SistemaController::class,'edit_sistema']);
route::get('/details_sistema/{id}', [SistemaController::class,'details_sistema']);

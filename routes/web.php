<?php

use Illuminate\Support\Facades\Route;
use App\Models\Agendamento;
use App\Http\Controllers\AgendamentoController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::post('add-aged',[AgendamentoController::class, 'add']);
Route::get('listar-agendamento',[AgendamentoController::class, 'list']);
Route::get('edit-agendamento/{id}',[AgendamentoController::class, 'edit']);
Route::post('updade',[AgendamentoController::class, 'updade']);
Route::get('delete/{id}',[AgendamentoController::class, 'delete']);




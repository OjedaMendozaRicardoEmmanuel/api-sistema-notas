<?php

use app\Controllers\AuthController;
use app\Controllers\UserController;
use app\Controllers\NotasController;
use bootstrap\Route;

  //Endpoints Auth
  Route::post('/api/login',[AuthController::class,'login']);
  Route::get('/api/profile',[AuthController::class,'profile']);
  
  //Endpoints Usuarios
  Route::get('/api/users/:id/notas',[UserController::class,'notas']);
  Route::get('/api/users/:id',[UserController::class,'findById']);
  Route::get('/api/users',[UserController::class,'getAll']);
  Route::post('/api/users',[UserController::class,'create']);
  Route::put('/api/users/:id',[UserController::class,'update']);
  Route::delete('/api/users/:id',[UserController::class,'delete']);

  //Endpoints Notas
  Route::get('/api/notas/:id/user',[NotasController::class,'user']);
  Route::get('/api/notas/:id',[NotasController::class,'findById']);
  Route::get('/api/notas',[NotasController::class,'getAll']);
  Route::post('/api/notas',[NotasController::class,'create']);
  Route::put('/api/notas/:id',[NotasController::class,'update']);
  Route::delete('/api/notas/:id',[NotasController::class,'delete']);

  Route::dispatch();
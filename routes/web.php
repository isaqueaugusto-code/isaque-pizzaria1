<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('componentes.cadastro');
});

Route::view('/cadastro', 'componentes.cadastro');
Route::view('/carrinho', 'componentes.carrinho');
Route::view('/login', 'componentes.login');
Route::view('/pagamento', 'componentes.pagamento');
Route::view('/pix', 'componentes.pix');
Route::view('/sucesso', 'componentes.sucesso');
Route::view('/cardapio', 'componentes.cardapio');

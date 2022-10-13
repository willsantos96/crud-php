<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Produto;



Route::get('/', function () {
    return view('inicio');
});


Route::post('/cadastrar-produto', function (Request $request){
    //dd($request->all()); #funcao "dd" do laravel para testar e exibir#

    //cadastrar no db
    Produto::create([
    'nome' => $request -> nome,
    'valor' => $request -> valor,
    'estoque' => $request -> estoque
    ]);


   echo "Produto cadastrado.";

});

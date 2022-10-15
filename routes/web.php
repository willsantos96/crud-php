<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Produto;



Route::get('/', function () {
    return view('inicio');
});


//rota de criação no banco de dados
Route::post('/cadastrar-produto', function (Request $request) {
    //dd($request->all()); #funcao "dd" do laravel para testar e exibir#

    //cadastrar no db
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);


    echo "Produto cadastrado.";
});

//rota de leitura no banco de dados
Route::get('/ver-produto/{id}', function ($id) {

    $produto = Produto::find($id);
    return view('ver', ['produto' => $produto]);
});


//rota de edição de produtos
Route::get('/editar-produto/{id}', function ($id) {

    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});


Route::post('/editar-produto/{id}', function (Request $request, $id) {

    $produto = Produto::find($id);
    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque
    ]);
    echo "Produto editado com sucesso!";
});


Route::get('/excluir-produto/{id}', function (Request $request, $id) {

    $produto = Produto::find($id);
    $produto->delete();

    echo "Produto excluído com sucesso!";
});


//rota de lista de produtos cadastrados no db
Route::get('/lista-de-produtos', function () {

    $produtos = Produto::all();
    return view('lista', ['produtos' => $produtos]);
});

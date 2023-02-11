<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/teste/sejabemvindo', function (){
//    echo "ola!Seja Bem vindo";
//});
//Route::get('/seunome/{nome?}', function($nome=null){
//    if(isset($nome))
//            return "ola! Seja Bem vindo, ".$nome."!";
//    return "Você não entrou com nenhum nome";
//});
//
//Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n){
//    for ($i=0; $i<$n; $i++)
//        echo  "Olá! Seja Bem Vindo, $nome! <br>";
//})->where('nome','[A-Za-z]+')
//    ->where('n','[0-9]+');
//
//Route::prefix('/app')->group(function (){
//    Route::get('/',function (){
//        return view('app');
//    })->name('app');
//    Route::get('/user', function (){
//        return view('user');
//    })->name('app.user');
//    Route::get('/profile',function (){
//        return view('profile');
//    })->name('app.profile');
//});

//Route::get('/produtos',function(){
//    echo "<h1>Produtos</h1>";
//    echo "<ol>";
//    echo "<li>Notebook</li>";
//    echo "<li>Impressora</li>";
//    echo "<li>Mouse</li>";
//    echo "</ol>";
//})->name('meusprodutos');


//Route::redirect ('todosprodutos1','produtos',301);
//
//Route::get ('todosprodutos2',function (){
//    return redirect()->route('meusprodutos');
//});
/////////////
//Route::put ('/requisicoes', function (Request  $request){
//    return 'Hello PUT';
//});
//Route::delete ('/requisicoes', function (Request  $request){
//    return 'Hello DELETE';
//});
//Route::options ('/requSisicoes', function (Request  $request){
//    return 'Hello OPTIONS';
//});
//Route::get ('/requisicoes', function (Request  $request){
//    return 'Hello GET';
//});
//Route::post ('/requisicoes', function (Request  $request){
//    return 'Hello POST';
//});
//Route::patch ('/requisicoes', function (Request  $request){
//    return 'Hello PATCH';
//});


/// Controladores
Route::get('produtos','MeusControles@produtos');
Route::get('nome','MeusControles@getNome');
Route::get('idade','MeusControles@getIdade');
//Route::get('multiplicar/{n1}/{n2}','MeusControles@multiplicar');

Route::resource('clientes','ClienteControlador');

Route::get('produtos', function (){
    return view('outras.produtos');
})->name('produtos');
Route::get('departamentos', function (){
    return view('outras.departamentos');
})->name('departamentos');

Route::get('opcoes/{opcao?}', function ($opcao=null){
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');

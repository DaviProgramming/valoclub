<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/evento/cadastro', function (Illuminate\Http\Request $request) {
    $dados = $request->all();

    $email = $dados['email'];
    $senha = $dados['senha'];

    if ($request->hasFile('imagem')) {

        $imagem = $request->file('imagem');

        $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

        $imagem->move(public_path('uploads'), $nomeImagem);

        $urlImagem = asset('uploads/' . $nomeImagem);

    }else{

        $urlImagem = 'null';

    }

    try {

        $user = new App\Models\User();
        $user->nome = 'null';
        $user->elo = 'null';
        $user->email = $email;
        $user->senha = $senha;
        $user->imagem_url = $urlImagem;
        $user->save();

        return response()->json(['success' => true]);

    } catch (\Exception $e) {

        return response()->json(['success' => false, 'error' => $e->getMessage()]);

    }


});

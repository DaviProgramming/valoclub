<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/meu-perfil', function (Illuminate\Http\Request $request) {

    $user = Auth::user();

    if ($user) {

        return view('pages.perfil');
    } else {

        return view('home');
    }
})->name('perfil');


Route::post('/evento/cadastro', function (Illuminate\Http\Request $request) {

    $dados = $request->all();

    $email = $dados['email'];
    $senha = $dados['senha'];
    $nickname = $dados['nickName'];
    $elo = $dados['elo_id'];
    $funcoes = $dados['funcoes'];

    $existeEmail = User::where('email', $email)->exists();
    $existeNickName = User::where('nome', $nickname)->exists();

    if ($existeEmail) {

        return response()->json(['success' => false, 'error' => 'já existe uma conta com este email']);
    }

    if ($existeNickName) {

        return response()->json(['success' => false, 'error' => 'já existe uma conta com este nickname']);
    }


    if ($request->hasFile('imagem')) {

        $imagem = $request->file('imagem');

        $nomeImagem = time() . '_' . $imagem->getClientOriginalName();

        $imagem->move(public_path('uploads'), $nomeImagem);

        $urlImagem = asset('uploads/' . $nomeImagem);

    } else {

        $urlImagem = 'null';
    }

    try {

        $user = new App\Models\User();
        $user->nome = $nickname;
        $user->elo = $elo;
        $user->email = $email;
        $user->senha = $senha;
        $user->imagem_url = $urlImagem;
        $user->roles = json_encode($funcoes);
        $user->save();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {

        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }

})->name('evento.cadastro');

Route::post('/evento/login', function (Illuminate\Http\Request $request) {


    $credenciais = $request->only('email', 'senha');

    $dados = $request->all();

    $email = $dados['email'];
    $senha = $dados['senha'];



    $user = User::where('email', $email)->where('senha', $senha)->first();


    if ($user) {

        Auth::login($user);

        return response()->json(['success' => true, 'user' => $user]);
    } else {

        $userComEmail = User::where('email', $email)->first();


        if($userComEmail){

            return response()->json(['success' => false, 'error' => 'Senha invalida']);

        }else {

            return response()->json(['success' => false, 'error' => 'Usuário não encontrado']);


        }


    }
})->name('evento.login');


Route::post('/evento/logout', function (Illuminate\Http\Request $request) {

    $dados = $request->all();

    $user = Auth::user();

    if ($user) {

        Auth::logout();


        return response()->json(['success' => true, 'message' => 'Usuario deslogado']);


    } else {



        return response()->json(['success' => false, 'message' => 'o usuario nao está logado']);
    }
});

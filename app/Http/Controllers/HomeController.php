<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial (home) após o login.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Retorna a view da página inicial
            return view('frontend.home');
        }

        // Caso o usuário não esteja autenticado, redireciona para o login com mensagem de erro
        return redirect()->route('login')->with('error', 'Você precisa estar logado para acessar esta página.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Exibe o formulário de login.
     */
    public function loginForm()
    {
        return view('usuarios.login');
    }

    /**
     * Processa o login do usuário.
     */
    public function login(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Busca o usuário pelo e-mail
        $usuario = User::where('email', $request->email)->first();

        // Verifica se o usuário existe e se a senha está correta
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            // Retorna erro se o e-mail ou senha forem inválidos
            return back()->withErrors([
                'email' => 'As credenciais fornecidas estão incorretas.',
            ])->onlyInput('email'); // Retorna o e-mail preenchido
        }

        // Autentica o usuário manualmente
        Auth::login($usuario);

        // Redireciona após o login bem-sucedido
        return redirect()->route('frontend.home')->with('success', 'Login realizado com sucesso!');
    }

    /**
     * Método de logout.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Você foi desconectado com sucesso!');
    }
}

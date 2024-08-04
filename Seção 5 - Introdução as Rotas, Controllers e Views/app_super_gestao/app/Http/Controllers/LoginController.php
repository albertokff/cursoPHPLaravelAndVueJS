<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }

    public function autenticar(Request $request) {
        
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se não passar pelo validate, é feito um redirect para a rota antiga
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('password');

        echo "Usuário: $email | Senha: $password";
        echo "<br>";
        
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
        
    }

    // public function home()
    // {
    //     // Redireciona para a página inicial após o login
    //     return redirect()->route('login.home');
    // }

    public function loginProcess(LoginRequest $request)
    {    

        // dd($request->all());
        // Valida os dados do formulário
        $request->validated();
        

        // Tenta autenticar o usuário com e-mail e senha
        $authenticated = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
    
        // Se falhar, volta para o formulário com erro
        if (!$authenticated) {
        return back()->withInput()->with('error', 'Email ou senha incorretos.');
        }
    
        // Se sucesso, redireciona para o dashboard ou outra rota
        $user = Auth::user(); // ou nem precisa, se não for usar a variável
        return redirect()->route('users.home')->with('success', 'Login realizado com sucesso!');
        

    }

    public function destroy(Request $request)
    {
        // Faz logout do usuário
        Auth::logout();
    
        // Redireciona para a página de login com mensagem de sucesso
        return redirect()->route('login')->with('success', 'Deslogado com sucesso!');
    }
} 

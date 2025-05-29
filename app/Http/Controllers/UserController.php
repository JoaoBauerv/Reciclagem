<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {   
        //recuperar os registros do banco de dados
        $users = User::orderByDesc('id')->get();



        //carregar view

        return view('users.index', ['users' => $users]);
    }

    public function home()
    {
        return view('users.home'); // Certifique-se de que a view exista
    }

    public function show(User $user)
    {
        //carregar view

        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        //carregar view

        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        // Validar os dados
        $request->validated();

        // Criar o usuário
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // criptografando aqui 
        ]);


        // Redirecionar para a página de listagem de usuários com uma mensagem de sucesso
        return redirect()->route('login')->with('success', 'Usuário criado com sucesso!');
    }
    
    public function edit(User $user)
    {
        //carregar view

        return view('users.edit', ['user' => $user]);
    }
    
    public function update(UserRequest $request, User $user)
    {
        // Validar os dados
        $request->validated();

        // Atualizar o usuário
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]); 

        // Redirecionar para a página de listagem de usuários com uma mensagem de sucesso
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        // Deletar o usuário
        $user->delete();

        // Redirecionar para a página de listagem de usuários com uma mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário deletado com sucesso!');
    }
}

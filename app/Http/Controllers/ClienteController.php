<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller

{
    public function home()
    {
        return view('cliente.home');
    }


    public function index()
    {
        return view('cliente.index', [
            'clientes' => Cliente::all()
        ]);

    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
        return response()->json($cliente);
    }


    public function create()
    {
        return view('cliente.create');
    }
      

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100|unique:clientes,nome',
            'email' => 'nullable|email|max:100|unique:clientes,email',
            'telefone' => 'nullable|string|max:20',
            'endereco' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:100',
            'estado' => 'nullable|string|max:50',
            'pais' => 'nullable|string|max:50',
            'cep' => 'nullable|string|max:20',
            'cpf' => 'nullable|string|max:14|unique:clientes,cpf',
            'observacoes' => 'nullable|string|max:500',
            'ativo' => 'boolean'
        ], [
            'nome.required' => 'O nome do cliente é obrigatório.',
            'nome.unique' => 'Esse nome de cliente já existe.',
            'email.email' => 'O e-mail deve ser válido.',
            'email.unique' => 'Esse e-mail já está cadastrado.',
            'cpf.unique' => 'Esse CPF já está cadastrado.',
        ]);

        Cliente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cep' => $request->cep,
            'cpf' => $request->cpf,
            'observacoes' => $request->observacoes,
            'ativo' => $request->ativo ?? true,
        ]);

        return redirect()->route('cliente.index')->with('success', 'Cliente criado com sucesso!');
    }

        
        
    

    // public function update(Request $request, $id)
    // {
    //     $cliente = Cliente::find($id);
    //     if (!$cliente) {
    //         return response()->json(['message' => 'Cliente not found'], 404);
    //     }

    //     $data = $request->validate([
    //         'nome' => 'sometimes|required|string|max:100',
    //         'email' => 'nullable|email|max:100',
    //         'telefone' => 'nullable|string|max:20',
    //         'endereco' => 'nullable|string|max:255',
    //         'cidade' => 'nullable|string|max:100',
    //         'estado' => 'nullable|string|max:50',
    //         'pais' => 'nullable|string|max:50',
    //         'cep' => 'nullable|string|max:20',
    //         'cpf' => 'nullable|string|max:14',
    //         'observacoes' => 'nullable|string|max:500',
    //         'ativo' => 'boolean'
    //     ]);

    //     $cliente->update($data);
    //     return response()->json($cliente);
    // }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if (!$cliente) {
            return response()->json(['message' => 'Cliente not found'], 404);
        }

        $cliente->delete();
        return response()->json(['message' => 'Cliente deleted successfully']);
    }

    public function search(Request $request)
    {
        $query = Cliente::query();

        if ($request->has('nome')) {
            $query->where('nome', 'like', '%' . $request->input('nome') . '%');
        }
        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }
        if ($request->has('ativo')) {
            $query->where('ativo', $request->input('ativo'));
        }

        $clientes = $query->get();
        return response()->json($clientes);
    }



}

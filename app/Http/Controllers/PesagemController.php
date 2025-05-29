<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesagem;
use App\Models\Material; // Certifique-se de importar o modelo Material

class PesagemController extends Controller
{
    public function index()
    {
        // Lógica para exibir a página de pesagem
        return view('pesagem.index');
    }

    public function create()
    {
        // Lógica para exibir o formulário de criação de pesagem
        $materials = Material::all(); // busca os materiais no banco
        return view('pesagem.create', compact('materials')); // envia para a view
        
    }

    public function store(Request $request)
    {
        // Lógica para armazenar os dados de pesagem
        // Validar e processar os dados do request
        // ...

        return redirect()->route('pesagem.index')->with('success', 'Pesagem criada com sucesso!');
    }

}

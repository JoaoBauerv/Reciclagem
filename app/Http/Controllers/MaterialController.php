<?php

namespace App\Http\Controllers;
use App\Models\Material;



use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all(); // ou paginate(), se quiser paginação
        return view('material.index', compact('materials'));
    }

    public function create()
    {
        return view('material.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar o material
        // ...
        return redirect()->route('material.index')->with('success', 'Material criado com sucesso!');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('material.show', compact('material'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('material.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar o material
        // ...
        return redirect()->route('material.index')->with('success', 'Material atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Lógica para deletar o material
        // ...
        return redirect()->route('material.index')->with('success', 'Material deletado com sucesso!');
    }
}

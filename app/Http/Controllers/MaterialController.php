<?php

namespace App\Http\Controllers;
use App\Models\Material;

//  EXPORTAR MATERIAL
use Barryvdh\DomPDF\Facade\Pdf;


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
        $request->validate([
            'name' => 'required|string|max:255|unique:materials,name',
            'quantity' => 'required|min:1',
            'price' => 'required|numeric|min:0',
            'type' => 'required|string|max:255',
        ], [
            'name.required' => 'O nome do material é obrigatório.',
            'name.unique' => 'Esse nome de material já existe.',
            'quantity.required' => 'A quantidade é obrigatória.',
            'price.required' => 'O preço é obrigatório.',
            'price.numeric' => 'O preço deve ser um número.',
            'price.min' => 'O preço deve ser um valor positivo.',
            'type.required' => 'O tipo de material é obrigatório.',
        ]);

        // Criar o material
        material::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type' => $request->type,

        ]);
        

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
        $request->validate([
            'name' => 'required|string|max:255|unique:materials,name,' . $id,
            'quantity' => 'required|min:1',
            'price' => 'required|numeric|min:0',
            'type' => 'required|string|max:255',
        ], [
            'name.required' => 'O nome do material é obrigatório.',
            'name.unique' => 'Esse nome de material já existe.',
            'quantity.required' => 'A quantidade é obrigatória.',
            'price.required' => 'O preço é obrigatório.',
            'price.numeric' => 'O preço deve ser um número.',
            'price.min' => 'O preço deve ser um valor positivo.',
            'type.required' => 'O tipo de material é obrigatório.',
        ]);
         Material::findOrFail($id)->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'type' => $request->type,
        ]);
        // ...
        return redirect()->route('material.index')->with('success', 'Material atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Lógica para deletar o material
        $material = Material::findOrFail($id);
        $material->delete();

        return redirect()->route('material.index')->with('success', 'Material deletado com sucesso!');
    }


    // EXPORTAR MATERIAL


    public function exportPdf()
    {
        $materials = Material::all();
        $pdf = Pdf::loadView('material.pdf', compact('materials'));
        return $pdf->download('materiais.pdf');
    }

}

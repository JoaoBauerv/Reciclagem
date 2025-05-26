@extends('layouts.admin')
@section('content')
<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <h5>Editar Material</h5>
        <x-alert/>
    </div>

    <div class="card-body">
        <form action="{{ route('material.update', $material->id) }}" method="post" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ old('name', $material->name) }}" placeholder="Nome" name="name">
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">Preço</label>
                <input type="number" class="form-control" id="price" value="{{ old('price', $material->price) }}" placeholder="Preço" name="price">
            </div>

            <div class="col-md-6">
                <label for="quantity" class="form-label">Medida</label>
                <br>
                <select class="form-select" id="quantity" name="quantity">
                    <option value="Unidade" {{ $material->quantity == 'Unidade' ? 'selected' : '' }}>Unidade</option>
                    <option value="Quilo" {{ $material->quantity == 'Quilo' ? 'selected' : '' }}>Quilo</option>
                    <option value="Litro" {{ $material->quantity == 'Litro' ? 'selected' : '' }}>Litro</option>
                </select>
             </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Tipo</label>
                <br>
                <select class="form-select" id="type" name="type">
                    <option value="Cobre" {{ $material->type == 'Cobre' ? 'selected' : '' }}>Cobre</option>
                    <option value="Papel" {{ $material->type == 'Papel' ? 'selected' : '' }}>Papel</option>
                    <option value="Plastico" {{ $material->type == 'Plastico' ? 'selected' : '' }}>Plástico</option>
                    <option value="Eletronico" {{ $material->type == 'Eletronico' ? 'selected' : '' }}>Eletrônico</option>
                    <option value="Aluminio" {{ $material->type == 'Aluminio' ? 'selected' : '' }}>Alumínio</option>
                    <option value="Outros" {{ $material->type == 'Outros' ? 'selected' : '' }}>Outros</option>
                </select>
            </div>

            {{-- <div class="col-md-6">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="description" value="{{ old('description', $material->description) }}" placeholder="Descrição" name="description">
            </div> --}}

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="{{ route('material.index') }}" class="btn btn-secondary">Voltar</a>

            

@endsection
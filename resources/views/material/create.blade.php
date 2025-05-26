@extends('layouts.admin')
@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <h5>Cadastrar Material</h5>
        <x-alert/>
    </div>

    <div class="card-body">
        <form action="{{ route('material.store') }}" method="post" class="row g-3">
            @csrf
            @method('POST')
            
            <div class="col-md-6">
                <label for="name" class="form-label">Nome material</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nome" name="name">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Preço</label>
                <input type="number" class="form-control" id="price" value="{{ old('price') }}" placeholder="Preço" name="price">
            </div>
            
            <div class="col-md-6">
                <label for="quantity" class="form-label">Medida</label>
                <br>
                <select class="form-select" id="quantity" name="quantity">
                    <option value="Unidade">Unidade</option>
                    <option value="Quilo">Quilo</option>
                    <option value="Litro">Litro</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="type" class="form-label">Tipo</label>
                <br>
                <select class="form-select" id="type" name="type">
                    <option value="Cobre">Cobre</option>
                    <option value="Papel">Papel</option>
                    <option value="Plastico">Plástico</option>
                    <option value="Eletronico">Eletrônico</option>
                    <option value="Aluminio">Alumínio</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            {{-- <div class="col-md-6">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="description" value="{{ old('description') }}" placeholder="Descrição" name="description">
            </div> --}}
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('material.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
@endsection


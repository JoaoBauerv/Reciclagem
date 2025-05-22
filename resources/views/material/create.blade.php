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
            @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nome" name="name">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Preço</label>
                <input type="text" class="form-control" id="price" value="{{ old('price') }}" placeholder="Preço" name="price">
            </div>
            <div class="col-md-6">
                <label for="unit" class="form-label">Unidade</label>
                <input type="text" class="form-control" id="unit" value="{{ old('unit') }}" placeholder="Unidade" name="unit">
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="description" value="{{ old('description') }}" placeholder="Descrição" name="description">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('material.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
@endsection


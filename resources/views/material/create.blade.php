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
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nome" name="name">
            </div>
            
            <div class="col-md-6">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" name="description" class="form-control" id="description" value="{{ old('description') }}" placeholder="Descrição do material" >
            </div>

            <div class="col-md-6">
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="number" name="quantity" class="form-control" id="quantity" value="{{ old('quantity') }}" placeholder="Quantidade do material">
            </div>

            <div clas="col-12">
                <button type="submit" class="btn btn-warning">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection


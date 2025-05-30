@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <h2>Bem-vindo ao Sistema de Clientes</h2>
    <div class="mt-4">
        <a href="{{ route('cliente.index') }}" class="btn btn-primary mb-2">Ver Clientes</a>
        <a href="{{ route('clientes.create') }}" class="btn btn-success mb-2">Cadastrar Cliente</a>
    </div>
</div>



@endsection
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Bem-vindo ao Sistema de Pesagem</h1>
        <p class="lead">Gerencie e acompanhe as pesagens de materiais recicláveis de forma simples e eficiente.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{ route('pesagem.create') }}" role="button">Nova Pesagem</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('pesagem.list') }}" role="button">Ver Pesagens</a>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')

    

    <div class="container mt-5">
        <div class="jumbotron text-center bg-light p-5 rounded">
            <h1 class="display-4">Bem-vindo ao Sistema de Reciclagem!</h1>
            <p class="lead mt-3">Aqui você pode gerenciar clientes, acompanhar processos de pesagem de reciclagem e contribuir para um mundo mais sustentável.</p>
            <hr class="my-4">
            <p>Use o menu acima para navegar pelo sistema.</p>
            <img src="{{ asset('images/logo.png') }}" alt="Reciclagem" class="img-fluid mt-4" style="max-width: 300px;">
        </div>
    </div>



@endsection
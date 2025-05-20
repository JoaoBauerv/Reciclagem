@extends('layouts.auth')

@section('content')

<main class="form-signin w-100 m-auto text-center bg-dark rounded ">
    
    <img class="mb-4" src="{{ asset('images/logo.png')}}" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal text-white">Login</h1>
    <x-alert/>

    <form action="{{ route('login.process') }}" method="POST" class="text-start">
        @csrf
        @method('POST')
 
        <div class="form-floating">
            <input type="email" name="email" class="form-control " id="email" placeholder="Digite seu email" value="{{ old('email') }}">
            <label for="email">Usuário</label>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <div class="input-group">
                <div class="form-floating flex-grow-1">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    <label for="password">Senha</label>
                </div>
                <span class="input-group-text" role="button" onclick="togglePassword('password', this)">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>
        </div>

        <button class="btn btn-primary w-100 py-2 mb-4" type="submit">Acessar</button>
    </form>

        <a href="{{ route('user.create') }}" class="btn btn-warning w-100 py-2 mb-4">Cadastrar</a>

</main>

@endsection
@extends('layouts.admin')


 @section('content')
    
    <a href="{{ route('user.index') }}">LISTAR</a><br>
    <a href ="{{ route('user.edit', ['user'=> $user->id]) }}">Editar</a><br>
    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" style="display:inline;">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja apagar este registro?')">Deletar</button>
    </form><br>
    
    <h2>VISUALIZAR USUARIO</h2>

    @if (session('success'))
    <p> 
        {{ session('success') }}
    </p>
    @endif

    id: {{ $user->id }}<br>
    Nome: {{ $user->name }}<br>
    Email: {{ $user->email }}<br>
    Criado em: {{ $user->created_at }}<br>

@endsection
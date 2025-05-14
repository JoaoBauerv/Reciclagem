@extends('layouts.admin')


 @section('content')
    

<br>
    <h2>EDITAR USUARIO</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="container mt-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Deixe em branco para não alterar">

        
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST"  class="container mb-4 mt-4">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger " onclick="return confirm('Tem certeza que deseja apagar seu usuário?')">Deletar</button>
</form>


@endsection
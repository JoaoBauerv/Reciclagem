
@extends('layouts.admin')


 @section('content')
     
    

    <h2>LISTAR USUARIOS</h2>

    @if (session('success'))
        <p> 
            {{ session('success') }}
        </p>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Açoes</th>
          </tr>
        </thead>
    <tbody>

    @forelse ($users as $user)

    <tr>
        <th >{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        
        <td class="text-center">
            <a href ="{{ route('user.show', ['user'=> $user->id]) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
            <a href ="{{ route('user.edit', ['user'=> $user->id]) }}" class="btn btn-outline-success btn-sm">Editar</a>
            {{-- <a href ="{{ route('user.destroy', ['user'=> $user->id]) }}">Deletar</a><br> --}}
            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST" style="display:inline;" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar este registro?')">Deletar</button>
            </form>
        </td>
    </tr>

    @empty

    @endforelse
    
    </tbody>
    </table>

  
@endsection  
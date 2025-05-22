@extends('layouts.admin')

@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <h5>Listar preço materiais</h5>
        <x-alert/>
    </div>
    
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Unidade</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->price }}</td>
                    <td>{{ $material->unit }}</td>
                    <td>{{ $material->description }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('material.edit', $material->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('material.destroy', $material->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
</div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
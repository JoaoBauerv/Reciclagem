@extends('layouts.admin')
@section('content')

        <form method="POST" action="{{ route('pesagem.store') }}">
            @csrf

            <div class="form-group">
                <label for="material">Material</label>
                <select name="material_id" id="material" class="form-control" required>
                    <option value="">Selecione um material</option>
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" step="0.01" name="peso" id="peso" class="form-control" required placeholder="Digite o peso">
            </div><br>

            <button type="submit" class="btn btn-primary">Registrar Pesagem</button>
        </form>

@endsection
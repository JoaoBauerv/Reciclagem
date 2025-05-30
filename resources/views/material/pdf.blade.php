<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Materiais</title>
    {{-- <img src="{{ asset('images/logo.png') }}" class="img-fluid" width="100px" height="50px"> --}}
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>
    <h2>Lista de Materiais</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->id }}</td>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->type }}</td>
                    <td>{{ $material->quantity }}</td>
                    <td>R$ {{ number_format($material->price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
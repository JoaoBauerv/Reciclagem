@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <h2>Cadastrar Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
  
        <x-alert/>

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone" name="telefone" required maxlength="15" pattern="\d*" inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="endereco" required>
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" class="form-control" id="pais" name="pais" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required maxlength="8" pattern="\d{8}" inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '').slice(0,8)">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" pattern="\d*" inputmode="numeric" oninput="this.value = this.value.replace(/\D/g, '')">
        </div>

        <div class="mb-3">
            <label for="observacoes" class="form-label">Observações</label>
            <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>



@endsection
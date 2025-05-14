@extends('layouts.admin')
@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <h5>Editar Material</h5>
        <x-alert/>
    </div>

    <div class="card-body">
        <form action="{{ route('material.update', $material->id) }}" method="post" class="row g-3">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ old('name', $material->name) }}" placeholder="Nome" name="name">
            </div>
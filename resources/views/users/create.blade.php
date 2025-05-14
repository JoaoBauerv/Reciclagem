@extends('layouts.admin')


 @section('content')

 <div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
    

        <div class="card-body">
        <span>Cadastrar Usuario</span>  
        <x-alert/>

    

    <form action="{{ route('user.store') }}" method="post" class="row g-3">
        @csrf
        @method('POST')

        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Nome" name="name">
        </div>
        
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email" >
        </div>

        <div class="col-md-12">
            <label for="passoword" class="form-label">Senha</label>
            <input type="password" class="form-control" id="passoword" value="{{ old('password') }}" placeholder="Senha com no mínimo 6 caracteres" name="password">
        </div>
        
        <div clas="col-12">
        <button type="submit" class="btn btn-warning" >Cadastrar</button>
        
        </div>
    </form>
    
</div>
    </div>
 </div>
@endsection
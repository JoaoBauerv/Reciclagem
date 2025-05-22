<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <title>CRUD</title>

    <style>
      html, body {
          height: 100%;
      }

      body {
          display: flex;
          flex-direction: column;
      }

      main {
          flex: 1;
      }
    </style>


</head>
<body>
    
    

  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <img src="{{ asset('images/logo.png') }}"  class="img-fluid" width="100px" height="50px">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="" class="nav-link px-2 text-white mx-3">INICIO</a></li>
            <li><a href="" class="nav-link px-2 text-white mx-3 ">PESAGEM</a></li>
            <li><a href="{{ route('material.index') }}" class="nav-link px-2 text-white mx-3">PREÇOS</a></li>
        </ul>

        {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form> --}}

        {{-- Quando o usuário **não está logado** --}}
        @guest
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='{{ route('login') }}'">Login</button>
                <button type="button" class="btn btn-warning me-2" onclick="window.location.href='{{ route('user.create') }}'">Cadastrar</button>        
            </div>
        @endguest

        {{-- Quando o usuário **está logado** --}}
        @auth
        <div class="dropdown text-end">
            <a href="#" class="d-block link text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-4"></i>
                <span class="px-2 text-white "> {{ auth()->user()->name }}</span>
            </a>
            
            <ul class="dropdown-menu text-small dropdown-menu-end" aria-labelledby="dropdownUser">
                <li><a class="dropdown-item" >----</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a  class="dropdown-item">-----</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-warning" href="{{ route('user.edit', auth()->user()->id) }}">Editar Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="{{ route('login.destroy') }}">Sair</a></li>
            </ul>
        </div>
        @endauth

      </div>
    </div>
  </header>


  
    <div class="container">
    @yield('content')


    </div>

    <div class="container mt-auto">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                  <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              </a>
              <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2025 Reciclagem, Inc</span>
          </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
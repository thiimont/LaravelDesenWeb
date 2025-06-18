<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - @yield('titulo')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('produtos') }}">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('sobre') }}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contato') }}">Contato</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
              @if(Auth::check())
                  <div class="dropdown">
                      <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Olá, {{ Auth::user()->nome }}
                      </button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <button type="submit" class="dropdown-item">
                                      Logout
                                  </button>
                              </form>
                          </li>
                      </ul>
                  </div>
              @else
                  <li class="nav-item">
                      <a href="{{ url('frmlogin') }}" class="btn btn-primary">Login</a>
                  </li>
              @endif
          </ul>
        </div>
      </div>
    </nav>

    <main>
        @if(session('sucesso'))
          <div class="alert alert-success" role="alert">
              {{ session('sucesso') }}
          </div>
        @endif
        
        @if(session('erro'))
          <div class="alert alert-danger" role="alert">
              {{ session('erro') }}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-warning">
              <ul>
                  @foreach ($errors->all() as $erro)
                      <li>{{ $erro }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @yield('conteudo')
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
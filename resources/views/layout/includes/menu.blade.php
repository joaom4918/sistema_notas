<nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Notas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('site.home')}}">Pagina inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.boletim.adicionar')}}">Adicionar nota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.aluno.adicionar')}}">Adicionar Aluno</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.boletim.listagem')}}">Listagem de notas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.aluno.listagem_alunos')}}">Listagem</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li>   <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
               sair
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>
             
            </ul>
          </li>
          
        
        </ul>
      
      </div>
    </div>
  </nav>
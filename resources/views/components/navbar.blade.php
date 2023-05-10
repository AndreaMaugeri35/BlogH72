<nav class="navbar navbar-expand-lg fs-4 navbar-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler btn-bg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto my-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link  btnnav @if(Route::is('homepage')) text-primary fw-bold active @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btnnav @if(Route::is('chi-siamo')) text-primary fw-bold active @endif" href="{{route('chi-siamo')}}">Chi siamo?</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link btnnav @if(Route::is('game.create')) text-primary fw-bold active @endif" href="{{route('game.create')}}">Aggiungi un gioco</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link  btnnav @if(Route::is('index')) text-primary fw-bold active @endif" aria-current="page" href="{{route('index')}}">Lista giochi</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link  btnnav @if(Route::is('contattaci')) text-primary fw-bold active @endif" aria-current="page" href="{{route('contattaci')}}">Contattaci</a>
          </li>
          </ul>
      </div>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DComics</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if ( Request::route()->getName() === 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ( Request::route()->getName() === 'comics.index') active @endif" aria-current="page" href="{{ route('comics.index') }}">Comics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ( Request::route()->getName() === 'comics.create') active @endif" aria-current="page" href="{{ route('comics.create') }}">Aggiungi Comics</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
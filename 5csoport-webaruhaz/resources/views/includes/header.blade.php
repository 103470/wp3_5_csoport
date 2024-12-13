<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #9CB2C3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Webshop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Főoldal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Új járművek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Használt járművek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Konfigurátor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alkatrészek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Árak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rólunk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kapcsolat</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route("logout") }}">Kijelentkezés</a>
          </li> 
          @endauth
        </ul>
        <span class="navbar-text">
            @yield('header_content')
        </span>
      </div>
    </div>
  </nav>

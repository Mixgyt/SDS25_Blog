<nav class="navbar bg-primary-subtle navbar-expand-lg sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/mvc_clase/public">SDS25 Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link<?= $pagina == "Inicio" ? " active" : "" ?>" aria-current="page" href="/mvc_clase/public">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle<?= str_contains($pagina, "Dia") ? " active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/mvc_clase/public/post/diauno">Día 1</a></li>
            <li><a class="dropdown-item" href="/mvc_clase/public/post/diados">Día 2</a></li>
            <li><a class="dropdown-item" href="/mvc_clase/public/post/diatres">Día 3</a></li>
            <li><a class="dropdown-item" href="/mvc_clase/public/post/diacuatro">Día 4</a></li>
            <li><a class="dropdown-item" href="/mvc_clase/public/post/diacinco">Día 5</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= $pagina == "Informacion" ? " active" : "" ?>" href="/mvc_clase/public/informacion">Mi Informacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= $pagina == "form" ? " active" : "" ?>" href="/mvc_clase/public/registro">Registro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
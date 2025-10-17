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
          <a class="nav-link<?= $pagina == "Blog" ? " active" : "" ?>" aria-current="page" href="/mvc_clase/public/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= $pagina == "Informacion" ? " active" : "" ?>" href="/mvc_clase/public/informacion">Mi Informacion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= $pagina == "form" ? " active" : "" ?>" href="#">Formulario</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
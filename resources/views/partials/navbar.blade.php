<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
  <div class="container">
    <a class="navbar-brand" href="#">Bobby Sutanto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item {{ ($title === "Home") ? 'active' : '' }} ">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item {{ ($title === "About") ? 'active' : '' }} ">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item {{ ($title === "Projects") ? 'active' : '' }} ">
        <a class="nav-link" href="#projects">Projects</a>
      </li>
      <li class="nav-item {{ ($title === "Contact") ? 'active' : '' }} ">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
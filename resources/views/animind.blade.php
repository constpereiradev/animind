<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/animind/css/app.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Animind</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Animes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Filmes</a></li>
            <li><a class="dropdown-item" href="#">Séries</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Todos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Procurar anime" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Procurar</button>

        <button class="btn" type="submit">Login</button>
        <button class="btn" type="submit">Cadastrar</button>
      </form>
    </div>
  </div>
</nav>

    </header>
<!--
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images2.alphacoders.com/100/1008472.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images2.alphacoders.com/516/thumb-1920-516664.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wallpapers.com/images/featured/hccbh0fp7rl24yd0.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
-->

<div class="animes">
<p class='fs-2'>Mais procurados</p>

    <div id="anime" class="card" style="width: 18rem;">
    <img src="https://i.pinimg.com/originals/92/82/b2/9282b29706df6ea6061f69517a3c8e70.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Jujutsu Kaisen</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-dark">Ver anime</a>
    </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="/animind/js/app.js"></script>
</body>
</html>

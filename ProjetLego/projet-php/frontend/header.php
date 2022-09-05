
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog lego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/style.css">
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="../index.php">
  <img src="tete_lego" class="logo" href="index.php">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" id = nav>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProjetLego/projet-php/frontend/categories.php?cat">Achitecture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProjetLego/projet-php/frontend/categories.php?cat=Star_Wars">Star wars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProjetLego/projet-php/frontend/categories.php?cat=Marvel">Marvel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProjetLego/projet-php/frontend/categories.php?cat=Lego_City">Lego City</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/ProjetLego/projet-php/frontend/categories.php?cat=Jurassic_World" tabindex="-1" aria-disabled="true">Jurassic World</a>
        </li>
      </ul>
      <a href="backend/connexion.php" class="btn btn-dark" role="button" aria-disabled="true">Connexion</a>
    </div>
  </div>
</nav>

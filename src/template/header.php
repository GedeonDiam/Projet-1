<nav class="navbar navbar-expand-lg bg-body-tertiary pt-0">
  <div class="container-fluid p-3" style=" background: linear-gradient(#0B162C, #1C2942, #3B556D);">
    <a class="navbar-brand" href="index.php?page=accueil"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php?page=accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=magasin">Magasins</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=culturadict">Culturadict</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=communaute">Communauté</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="index.php?page=service_clients">Service clients</a>
        </li>
        
       
      </ul>
      <form class="d-flex w-25 me-5" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search "></i></button>
      </form>
      <div class="user-info">
      <?php
      if (isset($_SESSION["connexion"])) {
        echo '<button class="btn" style="background: #5FC2BA;" type="submit"><a class="text-light" href="index.php?page=identification">'.$_SESSION["connexion"]["nom"]  .'</a></button>';
        echo '<a href="index.php?page=deconnection" class="ms-2"><button class="btn bg-danger"  type="submit"><i class="bi bi-box-arrow-left"></i></button></a>';
      }else{
        echo '<a href="index.php?page=identification"><button class="btn" style="background: #5FC2BA;" type="submit"><i class="bi bi-person"></i></button></a>';
      }

    ?>

      <button type="button" class="btn btn-outline-light"><i class="bi bi-cart"></i></button>

        </div>
    </div>
  </div>
</nav>

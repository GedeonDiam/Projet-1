<?php 
session_start();

require_once ("service/config/config.php");  ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projet</title>
  <link rel="stylesheet" href="public/style/index2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" /> -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css' rel='stylesheet' /><!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
  <?php
  require_once("src/template/header.php");
  require_once("service/route/setting_connexion.php");




  function somme($a, $b) {
    $som = $a + $b;
    echo  $som;
  }

  somme(11, 5);
  


  if (isset($_GET["page"])) {
    $page = $_GET["page"];
  } else {
    $page = "accueil";
  }

  switch ($page) {
    case "accueil":
      require_once("src/page/accueil.php");
      break;
    case "magasin":
      require_once("src/page/magasin.php");
      break;
    case "culturadict":
      require_once("src/page/culturadict.php");
      break;
    case "communaute":
      require_once("src/page/communaute.php");
      break;
    case "identification":
      require_once("src/page/login.php");
      break;
    case "inscription":
      require_once("src/page/inscription.php");
      break;
    case "service_clients":
      require_once("src/page/service_clients.php");
      break;
      case "deconnection":
        header("Location: index.php?page=accueil");
        session_destroy();
        break;
    default:
      require_once("src/page/accueil.php");
      break;
  }








  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
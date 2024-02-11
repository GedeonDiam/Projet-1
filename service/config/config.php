<?php
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$bdd="booktop";

$connexion=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$bdd);

if (!$connexion) {
    die('Impossible de se connecter : '. mysqli_connect_error());
}
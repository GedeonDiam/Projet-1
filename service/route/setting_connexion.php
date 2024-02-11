<?php

if (isset($_POST['inscription'])) {
    $data = [
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "mdp" => $_POST['mdp'],
        "cmdp" => $_POST['cmdp']
    ];
    $sql = "INSERT INTO utilisateur (nom,prenom,email,password) VALUES ('$nom','$prenom','$email','$mdp')";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
        connexion($data, $connexion);
    } else {
    }
    
} elseif (isset($_POST['connexion'])) {
    $data = [
        "email" => $_POST['email'],
        "mdp" => $_POST['mdp'],
    ];
    connexion($data, $connexion);
}



function connexion($data, $connexion)
{
    $sql = "SELECT * FROM utilisateur WHERE email='{$data['email']}' AND password='{$data['mdp']}'";
    $resultat = mysqli_query($connexion, $sql);
    $donnees = mysqli_fetch_assoc($resultat);
    $_SESSION["connexion"] = $donnees;
    header("Location: index.php?page=accueil");
}

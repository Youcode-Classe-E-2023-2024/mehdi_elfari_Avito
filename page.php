<?php
include 'connexion.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

$requete = "INSERT INTO tas (nom,prenom,email) VALUES('$nom','$prenom','$email')";
$res = mysqli_query($con, $requete);
if ($res) {
    echo "<h1>INSERTION AVEC SUCCESS</h1>";
} else {
    echo "<h1>Erruer</h1>";
}

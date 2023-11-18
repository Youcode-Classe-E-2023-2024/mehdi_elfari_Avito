<?php
include 'connexion.php';
if (isset($_GET['id'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE tas SET nom = '$nom', prenom = '$prenom', email = '$email' WHERE id = '$id'";

    $q = mysqli_query($con, $sql);
    if (isset($q)) {
        echo "<h1>MODIFICATION AVEC SUCCESS</h1>";
    }
} else {
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
}

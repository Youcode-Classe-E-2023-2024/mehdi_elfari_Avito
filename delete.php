<?php
include 'connexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM tas where id = '$id'";
$query = mysqli_query($con, $sql);
if (isset($query)) {
    header("location:affichage.php");
}

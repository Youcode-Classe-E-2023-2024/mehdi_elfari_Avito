<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'connexion.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * from tas where id = '$id'";
        $q = mysqli_query($con, $sql);
        $rows = mysqli_fetch_assoc($q);
        $nom = $rows['nom'];
        $prenom = $rows['prenom'];
        $email = $rows['email'];
    }

    ?>
    <form method="post" action="page.php">
        <input style="width: 20%; padding: 0.5rem;" type="text" name="nom" placeholder="Entrer Votre Nom" value="<?php if (isset($_GET['id'])) {
                                                                                                                        echo $nom;
                                                                                                                    } ?>"><br><br>
        <input style="width: 20%; padding: 0.5rem;" type="text" name="prenom" placeholder="Entrer Votre Prénom" value="<?php if (isset($_GET['id'])) {
                                                                                                                            echo $prenom;
                                                                                                                        } ?>"><br><br>
        <input style="width: 20%; padding: 0.5rem;" type="email" name="email" placeholder="Entrer Votre Email" value="<?php if (isset($_GET['id'])) {
                                                                                                                            echo $email;
                                                                                                                        } ?>"><br><br>

        <button style="padding: 0.5rem; width: 8rem;" type="submit">
            <?php
            if (isset($_GET['id'])) {
                echo "MODIFIER";
            } else {
                echo "ENVOYER";
            }
            ?>
        </button>
    </form>
    <br><br>

    <a href="affichage.php">AFFICHAGE</a>
</body>

</html>
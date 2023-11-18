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

    $nom = $prenom = $email = "";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Using prepared statement to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM tas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $email = $row['email'];
        } else {
            // Handle case where ID doesn't exist
            // You may want to redirect or show an error message
        }
        $stmt->close();
    }
    ?>

    <form method="post" action="page.php<?php if (isset($_GET['id'])) {
                                            echo "?id=" . $_GET['id'];
                                        } ?>">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id ?? '', ENT_QUOTES); ?>">
        <input style="width: 20%; padding: 0.5rem;" type="text" name="nom" placeholder="Entrer Votre Nom" value="<?php echo htmlspecialchars($nom, ENT_QUOTES); ?>"><br><br>
        <input style="width: 20%; padding: 0.5rem;" type="text" name="prenom" placeholder="Entrer Votre Prénom" value="<?php echo htmlspecialchars($prenom, ENT_QUOTES); ?>"><br><br>
        <input style="width: 20%; padding: 0.5rem;" type="email" name="email" placeholder="Entrer Votre Email" value="<?php echo htmlspecialchars($email, ENT_QUOTES); ?>"><br><br>

        <button style="padding: 0.5rem; width: 8rem;" type="submit">
            <?php echo isset($_GET['id']) ? "MODIFIER" : "ENVOYER"; ?>
        </button>
    </form>
    <br><br>

    <a href="affichage.php">AFFICHAGE</a>
</body>

</html>
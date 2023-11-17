<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>DATA</h2>
    <hr>
    <table border="1" width="70%">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
        </tr>
        <?php
        include 'connexion.php';
        $requete = "SELECT * FROM tas";
        $query = mysqli_query($con, $requete);
        while ($rows = mysqli_fetch_assoc($query)) {
            $id = $rows['id'];
            echo "<tr>";
            echo "<td>" . $rows['nom'] . "</td>";
            echo "<td>" . $rows['prenom'] . "</td>";
            echo "<td>" . $rows['email'] . "</td>";
            echo "<td><a href='delete.php?id=" . $id . "'>Supprimer</td>";
            echo "</tr>";
            echo "<td><a href='index.php?id=" . $id . "'>Modifier</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
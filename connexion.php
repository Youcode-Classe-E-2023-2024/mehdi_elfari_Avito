
<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PWD", "");
define("DB_NAME", "crudbd");

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PWD, DB_NAME);

if ($con == false) {
    die("Could not connect to db");
}

$sqlCreateTask = "CREATE TABLE IF NOT EXISTS tas(id INT PRIMARY KEY AUTO_INCREMENT,  nom VARCHAR(191) NOT NULL, prenom VARCHAR(191) NOT NULL, email VARCHAR(191) NOT NULL);";
$result = mysqli_query($con, $sqlCreateTask);
if (!$result) {
    die("Could not create task");
}

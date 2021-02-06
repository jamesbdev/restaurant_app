


<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/* Connect to a MySQL database using driver invocation */

define("DB_USER", "root");
define("DB_NAME", "food_store_app");
define("DB_PASSWORD", "root");
define("DB_LOCAL_HOST", "localhost");


try {
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host='. DB_LOCAL_HOST , DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

include "model/menuModel.php";


//example query from database
// $stmt = $dbh->query("SELECT * FROM users");
// while ($row = $stmt->fetch()) {
//     echo $row['firstname']."<br />\n";
// }

$main_menu = getAllMenuItems();

//var_dump($main_menu);
?>


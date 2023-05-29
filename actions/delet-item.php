<?php 
session_start();
// first we connect to the database
define("host", "localhost");
define("dbuser", "root");
define("dbpass", "");
define("dbname", "malabis");
$con = mysqli_connect(host, dbuser, dbpass, dbname);

if (isset($_SESSION["id"])) {
    $query = "DELETE FROM shop_item   WHERE item_id =" .  $_GET["id"];

    header( "../profile.php" );

}

?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "fb_db";    ## Replace `database_db` with the name of the database to which you want to connect.
// $database = "school_db";    ## Replace `database_db` with the name of the database to which you want to connect.

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
  die("Unable to connect to $database: ". mysqli_connect_error());
}

return $connection;  ## This will enable you to use the already open connection on any other script when you include this script in them. (Check index.php)
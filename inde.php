<?php
include "db.php";
include "functions.php";



// Call your functions here and echo their result

// $new_user = InsertUser($connection);
// echo $new_user."<br><br>";
// $SelectAllUsers = SelectAllUsers($connection);
// echo $SelectAllUsers ."<br><br>";
// $delete_user = DeleteUser($connection);
// echo $delete_user . "<br><br>";
$SelectOneUser = SelectOneUser($connection);
echo $SelectOneUser . "<br><br>";
// $UpdateUser = UpdateUser($connection);
// echo $UpdateUser . "<br><br>";
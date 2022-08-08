<?php

// Sample INSERT function which should be edited to suit your own project
function InsertUser($database_connection)
{
  // $queryString = "INSERT INTO `users_tb`(fName, sName, email, password, gender, dob) VALUES('samuel', 'Adams', 'keladams@gmail.com', '12345', 'female', '1999-07-09' )";
  // $queryString = "INSERT INTO `lecturer_tb`(fName, sName, courseID ) VALUES('samuel', 'Adams',  '12345')";
  $queryString = "INSERT INTO `student_tb`(fName, sName, levelID, deptID) VALUES('samuel', 'Adams',  '12345', '2345')";

  $queryResult = mysqli_query($database_connection, $queryString);

  if ($queryResult) {
    $msg = "Successfully inserted new record";
  } else {
    $msg = "Error occured while inserting new record: " . mysqli_error($database_connection);
  }

  return $msg;
}

function SelectOneUser($database_connection)
{
  // Your Code
  // $queryString = "SELECT * FROM `users_tb` WHERE `ID` = 1";
  // $queryString = "SELECT * FROM `student_tb` WHERE `ID` = 1";
  $queryString = "SELECT * FROM `lecturer_tb` WHERE `ID` = 2";

  $queryResult = mysqli_query($database_connection, $queryString);

  if (mysqli_num_rows($queryResult) > 0) {  

    while ($row = mysqli_fetch_assoc($queryResult)) {  
      // echo "Dear {$row['fName']}, your email is {$row['email']}";
      // echo "Dear {$row['fName']}, your level is {$row['levelID']}";
      echo "Dear {$row['fName']}, your courseID is {$row['courseID']}";
    }


  } else {
    echo "No records found";
  }
}

function SelectAllUsers($database_connection)
{
  // Your Code
  $queryString = "SELECT * FROM `users_tb`";
  // $queryString = "SELECT * FROM `student_tb`;
  // $queryString = "SELECT * FROM `lecturer_tb`;

  $queryResult = mysqli_query($database_connection, $queryString);

  if (mysqli_num_rows($queryResult) > 0) {  

    while ($row = mysqli_fetch_assoc($queryResult)) {  
      echo "Dear {$row['fName']}, your email is {$row['email']}";
      // echo "Dear {$row['fName']}, your level is {$row['levelID']}";
      // echo "Dear {$row['fName']}, your courseID is {$row['courseID']}";
    }


  } else {
    echo "No records found";
  }
}

function DeleteUser($database_connection)
{
  // Your Code
  // $queryString = "DELETE FROM `users_tb` WHERE `ID` = 2";
  // $queryString = "DELETE * FROM `student_tb` WHERE `ID` = 1";
  // $queryString = "DELETE * FROM `lecturer_tb` WHERE `ID` = 2";
  // $queryResult = mysqli_query($database_connection, $queryString);
  // if ($queryResult) {
  //   $msg = "Successfully delete new record";
  // } else {
  //   $msg = "Error occured while deleting new record: " . mysqli_error($database_connection);
  // }

  // return $msg;
}

function UpdateUser($database_connection)
{
  // Your Code
  // $queryString = "UPDATE `users_tb` SET `fName`='favour',`sName`='bassey',`email`='1234567',`password`='kjhgfd',`gender`='male',`dob`='2000-01-09' WHERE `ID`= 1";
  // $queryString = "UPDATE `student_tb` SET `fName`='James',`sName`='Etim',`levelID`='2',`deptID`='2000' WHERE `ID`= 1";
  // $queryString = "UPDATE `lecturer_tb` SET `fName`='Peter',`sName`='Faith',`courseID`='1234567' WHERE `ID`= 1";

  // $queryResult = mysqli_query($database_connection, $queryString);

  // if ($queryResult) {
  //   $msg = "Successfully updated new record";
  // } else {
  //   $msg = "Error occured while updating new record: " . mysqli_error($database_connection);
  // }

  // return $msg;
}
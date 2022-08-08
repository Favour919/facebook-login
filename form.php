<?php
    include "db.php";
    $fname = "";
    $surName = "";
    $email = "";
    $gender = "";
    $password = "";
    $pronoun = "";
    $date = "";

    $fnameError = "";
    $surNameError = "";
    $emailError = "";
    $genderError = "";
    $passwordError = "";
    $pronounError = "";
    $dateError = "";
    $year = date("Y");
    $month = date("F");

function GetMonth()
{
    return [
        ['title' => 'January'],
        ['title' => 'Febuary'],
        ['title' => 'March'],
        ['title' => 'Apirl'],
        ['title' => 'May'],
        ['title' => 'June'],
        ['title' => 'July'],
        ['title' => 'August'],
        ['title' => 'September'],
        ['title' => 'October'],
        ['title' => 'November'],
        ['title' => 'December']
    ];
};

if(isset($_POST["submit"])){
    if($_POST["year"] > ($year - 5)){
         $dateError = "Must be above five years";
    }else{
        $date = ($_POST["year"]);
    };
    if (empty($_POST["fname"])) {
        $fnameError = "Please enter a valid name";
    } else {

        $fname = test_character($_POST["fname"]);


        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {

            $fnameError = "Please enter a valid name";
        }
    }
    if (empty($_POST["surname"])) {
        $surNameError = "Please enter a valid name";
    } else {

    $surName = test_character($_POST["surname"]);


        if (!preg_match("/^[a-zA-Z-' ]*$/", $surName)) {

        $surNameError = "Please enter a valid name";
        }
    }
    if (empty($_POST["email"])) {
        $emailError = "Please enter a valid email or phone number";
    } else {
        $email = test_character($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (!intval($email)) {
                $emailError = "Please enter a valid email or phone number";
            } 
        }
        
    }
    if (empty($_POST["password"])) {
        $passwordError = "Please enter a password";
    }else{
        $password = test_character($_POST["password"]);
    }
    if (empty($_POST["gender"])) {
        $genderError = "Please select gender";
    }else{
        $gender = test_character($_POST["gender"]);
    }

    if($gender == "custom"){
        if(empty($_POST["pronoun"])){
            $pronounError = "Please select gender";
        }else{
            $pronoun = test_character($_POST["pronoun"]);
        }
    }
    if($fnameError == "" && $surNameError == "" && $emailError == "" && $genderError == "" && $passwordError == ""&& $pronounError == "" && $dateError == ""){
        $queryString = "INSERT INTO `users_tb`( fName, sName, email, password, gender, dob) VALUES( '$fname', '$surName', '$email', '$password','$gender','$date' )";

        $queryResult = mysqli_query($connection, $queryString);   
        if ($queryResult) {
            $msg = "Successfully inserted new record";
        } else {
            $msg = "Error occured while inserting new record: " . mysqli_error($connection);
        }
            header('Location: home.php');
    }


}


    
    
    
    
        function test_character($data){
            $data = htmlspecialchars($data);
            return $data;
        }

    include "index.php";
    
?>
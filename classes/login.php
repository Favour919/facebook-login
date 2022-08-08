<?php
    class login{
        public $db_con;
        public function __construct($db_con) {
            $this->db_con = $db_con;
        }
        public function Process($username = "", $password = ""){
                if(empty($username)|| empty($password)){
                    echo ("Invalid User");
                }

         $queryString = "SELECT FROM `users_tb` WHERE email = '$username', password = '$password'";
            $queryResult = $this -> db_con -> query($queryString);
            if($queryResult -> num_rows > 0){
                header("Location: home.php");
            }else{
               header("Location: dashboard.php");
            }
        }

    
        
    }



?>
<?php
    class DBConnect{
        private $db_host = "localhost";
        private $db_username = "root";
        private $db_password = "";
        private $db_name = "fb_db";
        public $con = null;
        public function __construct(){

            $this -> con = new mysqli($this -> db_host, $this -> db_username, $this -> db_password, $this -> db_name);
            if ($this -> con -> connect_error){
                die("Connection Failed". $this -> con -> connect_error);
            }
                     
            return $this->con;
        }
    }



?>

<?php

    include_once 'databaseConfig.php' ;

    class UserMapper extends DatabasePDOConfiguration {

        private $conn;


        public function __construct() {
            $this->conn = $this->getConnection();
        }


        public function getUserById($userId){

            $query = " SELECT * FROM user WHERE userid = :id ";

            $statement = $this-> conn -> prepare($query);
            $statement -> bindParam(":id" , $userId);
            $statement -> execute();
            $result = $statement -> fetch (PDO :: FETCH_ASSOC);
            return $result;

        }

        public function getUserbyUsername($username) {

            $query = "SELECT * FROM user WHERE username=:username";
            $statement = $this->conn->prepare($query);
            $statement->bindParam(":username", $username);
            $statement->execute();

            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;

        }

        public function getAllUsers(){

            $sql = "SELECT * from user";
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;

        }

        public function insertUser($user){

            $sql = "INSERT INTO  user(username,userlastname ,role,password) values (:name ,:lastname,:role ,:password)";

            
            $username = $user->getUsername();
            $lastname = $user->getLastname();
            $pass = $user->getPassword();
            $password = password_hash($pass, PASSWORD_BCRYPT);
            $role = $user->getRole();


            $statement =$this->conn->prepare($sql);

            $statement -> bindParam(":name" , $username) ;
            $statement -> bindParam(":lastname" , $lastname) ;
            $statement -> bindParam(":role" , $role) ;
            $statement -> bindParam(":password" , $password) ;

            $statement -> execute();
           echo " <script?> alert ('Perdoruesi eshte shtuar me sukses!'); </script> ";


        }
    }

?>
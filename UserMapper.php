
<?php

    include_once '../Projekt---Inxhinieri-e-Web-it/databaseConfig.php' ;

    class UserMapper extends DatabasePDOConfiguration {

        private $conn;
        private $query;


        public function _construct() {
            
            $this->conn = $this-> getConnection();
        }


        public function getUserById($userId){

            $sql = " select * from user where userid = :id ";

            $statement = $this-> conn -> prepare($sql);
            $statement -> bindParam(":id" , $userId);
            $statement -> execute();
            $result = $statement -> fetch (PDO :: FETCH_ASSOC);
            return $result;

        }

        public function getUserbyUsername($username) {

            $this->query = "select * from user where username=:username";
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":username", $username);
            $statement->execute();

            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result;

        }

        public function getAllUsers(){
            $this->query = "select * from user";
            $statement = $this->conn->prepare($this->query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;

        }

        public function insertUser($user){

            $query = "insert into user(username,userlastname ,role,password) values (:name ,:lastname,:role ,:password)";

            
            $username = $user->getUsername();
            $lastname = $user->getLastname();
            $pass = $user->getPassword();
            $password = password_hash($pass, PASSWORD_BCRYPT);
            $role = $user->getRole();


            $statement =$this->conn->prepare($query);

            $statement -> bindParam(":name" , $username) ;
            $statement -> bindParam(":lastname" , $lastname) ;
            $statement -> bindParam(":role" , $role) ;
            $statement -> bindParam(":password" , $password) ;

            $statement -> execute();
           echo " <script?> alert ('Perdoruesi eshte shtuar me sukses!'); </script> ";


        }


        public function edit(\SimpleUser $user, $id)
        {
            $this->query = "update user set username=:username, userlastname:lastname where userid=:id";
            var_dump($user);
            $statement = $this->conn->prepare($this->query);
            $username = $user->getUsername();
            $lastname = $user->getLastname();
            $statement->bindParam(":username", $username);
            $statement->bindParam(":userlastname", $lastname);
            $statement->bindParam(":id", $id);

            $statement->execute();
            echo " <script?> alert ('Perdoruesi eshte ndryshuar me sukses!'); </script> ";


        }



        public function deleteUser($userId){

            $this->query = "delete from user where userid=:id";
            $statement = $this->conn->prepare($this->query);
            $statement->bindParam(":id", $userId);

            $statement->execute();

            echo " <script?> alert ('Perdoruesi eshte fshire me sukses!'); </script> ";


        }


    }

?>
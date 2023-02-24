
<?php

include_once '../phpfaza2/databaseConfig.php';

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

            $sql = "INSERT INTO  user(username,userlastname ,role , roleName ,password) values
            (:name ,:lastname,:role , :roleName,:password )";

            
            $username = $user->getUsername();
            $lastname = $user->getLastname();
            $role = $user->getRole();
            $roleName = $user->getRoleName();
            $pass = $user->getPassword();
            $password = password_hash($pass, PASSWORD_BCRYPT);
            


            $statement =$this->conn->prepare($sql);

            $statement -> bindParam(":name" , $username) ;
            $statement -> bindParam(":lastname" , $lastname) ;
            $statement -> bindParam(":role" , $role) ;
            $statement -> bindParam(":roleName" , $roleName) ;
            $statement -> bindParam(":password" , $password) ;

            $statement -> execute();

            


        }

        public function edit(\SimpleUser $user, $id){

           $sql= "UPDATE user SET username=:username, userlastname=:lastname ,  password =:password WHERE userid=:id";
            //  var_dump($user);
            $statement = $this->conn->prepare($sql);
            $username = $user->getUsername();
            $lastname = $user->getLastname();
            
            $password = $user->getPassword();

            $statement->bindParam(":username", $username);
            $statement->bindParam(":lastname", $lastname);
           
            $statement->bindParam(":password", $password);


            $statement->bindParam(":id", $id);

            $statement->execute();


        }


        public function deleteUser($userId){

            $query = "DELETE FROM user WHERE userid=:id";
            $statement = $this->conn->prepare($query);
            $statement->bindParam(":id", $userId);

            $statement->execute();

            

        }
    }

?>
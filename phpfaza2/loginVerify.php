
<!-- -- Kodi per verifikimin e butonit kycuni per kycje dhe regjistrim -->

<?php

    // require_once '../phpfaza2/users.php';
    
    include_once '../phpfaza2/UserMapper.php';
    include_once '../phpfaza2/admin.php';
    include_once '../phpfaza2/simpleUser.php';


    session_start();

    if(isset($_POST['login-btn'])){
        $login = new LoginLogic($_POST);
        $login->verify();
    }
    else if (isset($_POST['register-btn'])) {
        $register = new RegisterLogic($_POST);
        $register->registerUser();

    }

    else {
        header("Location: ../php_code/kycuni-regjistrohuni.php");
    }


    class LoginLogic{


        private $username = "";
        private $password = "";

        
        public  function __construct($formData){
            $this-> username = $formData['username'];
            $this-> password = $formData['password'];
        }
        
            
        
        


        public function verify() {

           

            if($this->verifyEmptyData($this->username, $this->password)){
                header("Location:../php_code/kycuni-regjistrohuni.php");
            }

            else if($this->verifyLogin($this->username, $this->password) ){
                header("Location:../php_code/index.php");
            }

            else {
                header("Location:../php_code/kycuni-regjistrohuni.php");
            }

        }


        private function verifyEmptyData($username , $password) {

            if(empty($username) || empty($password)){
    
                return true;
    
            }
            return false;
    
        }

        private function verifyLogin($username, $password) {
        
            $mapper = new UserMapper();
            $user = $mapper->getUserByUsername($username);
            if ($user == null || count($user) == 0) 
                return false;
            
            else if (password_verify($password, $user['password'])) {
                    if ($user['role'] == 1) {
                        $obj = new SimpleUser($user['id'], $user['username'], $user['userlastname']  , $user['role'] ,$user['password']);
                        $obj->setSession();
                    }
                    else {
                    $obj = new SimpleUser($user['id'], $user['username'], $user['userlastname']  , $user['role'] ,$user['password']);
                    $obj->setSession();
                    }
            
                return true;
            } 
            else return false;
    
        }
    }   

    class RegisterLogic {

        private $username = "";
        private $lastname = "";
        private $password = "";

        
        public  function __construct($formData){

            $this-> username = $formData['register-username'];
            $this-> lastname = $formData['register-lastname'];
            $this-> password = $formData['register-password'];
        }


        public function registerUser(){


              if($this -> username === "rinor" || $this-> username === "rinas") {
                
                  $user = new Admin($this->username , $this->lastname , 1 , $this->password);
                  $mapper = new UserMapper();
                  $mapper->insertUser($user);
                  header("Location: ../php_code/kycuni-regjistrohuni.php");



              }
             else {  

                $user = new SimpleUser($this->username , $this->lastname , 0 , $this->password );
                $mapper = new UserMapper();
                $mapper->insertUser($user);
                header("Location: ../phpfaza2/kycuni-regjistrohuni.php");
              }
        } 



    }
?>
    


    

   

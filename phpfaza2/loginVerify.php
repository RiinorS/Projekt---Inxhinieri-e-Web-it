
<!-- -- Kodi per verifikimin e butonit  per kycje dhe regjistrim -->

<?php
    require 'UserMapper.php';
    require 'admin.php';
    require 'simpleUser.php';

    session_start();

    if(isset($_POST['login-btn'])){
        $login = new LoginLogic($_POST);
        $login->verify();
    }
    else if (isset($_POST['register-btn'])) {
        $register = new RegisterLogic($_POST);
        $register->register();
    }
    else {
        header("Location:../php_code/index.php");
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
                header("Location:../php_code/index.php");
            }
            else if($this->verifyLogin($this->username, $this->password) ){
                header("Location:../phpfaza2/dashboard.php");
            }
            else {
                header("Location:../php_code/index.php");
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
                        $obj = new Admin($user['username'], $user['userlastname']  , $user['role'] ,$user['roleName'] ,$user['password']);
                        $obj->setSession();
                    }
                    else {
                    $obj = new SimpleUser($user['username'], $user['userlastname']  , $user['role'] , $user['roleName'] ,$user['password']);
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

            if($this->username === "Rinor" || $this->username === "Rinas") {
                $user = new Admin($this->username , $this->lastname  , 1 , "Administrator" , $this->password);
                $user->setSession();
                $mapper = new UserMapper();
                $mapper->insertUser($user);
                header("Location:../phpfaza2/dashboard.php");
            }
            else {  

                $user = new SimpleUser($this->username , $this->lastname , 0 , "Përdorues" ,  $this->password);
                $user->setSession();
                $mapper = new UserMapper();
                $mapper->insertUser($user);
                header("Location:../php_code/faqja.php");
            }
        }
        
        private function verifyEmptyData2($username , $lastname , $password) {

            if(empty($username) || empty($lastname) || empty($password)){
                return true;
            }
            return false;
        }


        public function register() {

            if($this->verifyEmptyData2($this->username, $this->lastname ,$this->password)){
                header("Location:../php_code/index.php");
            }
            else if($this->registerUser($this->username, $this->lastname ,$this->password)) {
                header("Location:../php_code/faqja.php");
            }
            
        }
        
    }
?>
    


    

   

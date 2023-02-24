<?php
require_once 'person.php';

class SimpleUser extends Person
{
    
    public function __construct($username, $userlastname , $role, $roleName , $password )  {
        parent::__construct($username, $userlastname , $role, $roleName, $password );
    }

    public function setSession()
    {
        $_SESSION['role'] = 0;
        $_SESSION['roleName'] = "Përdorues";
    }

    public function setCookie() {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
    

    public function getUsername() {
        return $this->username;
    }
    
    public function getLastname() {
        return $this->userlastname;
    }
    
    public function getPassword() {
        return $this->password;
    }


    public function getRole() {
        return $this->role;
    }

    public function getRoleName() {
        return $this->roleName;
    }

}

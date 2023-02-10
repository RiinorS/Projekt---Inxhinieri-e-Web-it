<?php
require_once '../Projekt---Inxhinieri-e-Web-it/person.php';

class SimpleUser extends Person
{
    
    public function __construct($username, $userlastname, $role, $password )  {
        parent::__construct($username, $userlastname, $role, $password);

    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie() {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
    public function getLastname() {
        return $this->userlastname;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    

    public function getRole() {
        return $this->role;
    }

}

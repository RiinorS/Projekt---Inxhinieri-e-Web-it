<?php

    abstract class Person {

        
        protected $username;
        protected $userlastname;
        protected $password;
        protected $role;
        protected $roleName;



        function __construct($username, $userlastname , $role, $roleName, $password ) {
            $this->username = $username;
            $this->userlastname = $userlastname;
            $this->role = $role;
            $this->roleName = $roleName;
            $this->password = $password;
        }

        abstract protected function setSession();
        abstract protected function setCookie();

    }


    

    


    



?>
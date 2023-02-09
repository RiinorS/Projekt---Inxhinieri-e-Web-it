
<?php

   


    class Users {


             private static $loginAdminUser = array( "id" => '1' , "username" => "rinor" , "password" => "salihu" , 'role' => '1' , 'age' => '20');
             
             private static $loginSimpleUser2 = array( "id" => '2', "username" => "user2" , "password" => "user2" , 'role' => '0' , 'age' => '25');
             private static $loginSimpleUser3 = array( "id" => '3', "username" => "user3" , "password" => "user3" , 'role' => '0' , 'age' => '32');
             private static $loginSimpleUser4 = array( "id" => '4', "username" => "user4" , "password" => "user4" , 'role' => '0' , 'age' => '37');
             private static $loginSimpleUser5 = array( "id" => '5', "username" => "user5" , "password" => "user5" , 'role' => '0' , 'age' => '34');
             private static $loginSimpleUser6 = array( "id" => '6', "username" => "user6" , "password" => "user6" , 'role' => '0' , 'age' => '28');
             private static $loginSimpleUser7 = array( "id" => '7', "username" => "user7" , "password" => "user7" , 'role' => '0' , 'age' => '35');
             private static $loginSimpleUser8 = array( "id" => '8', "username" => "user8" , "password" => "user8" , 'role' => '0' , 'age' => '29');
             private static $loginSimpleUser9 = array( "id" => '9', "username" => "user9" , "password" => "user9" , 'role' => '0' , 'age' => '30');
             private static $loginSimpleUser10 = array( "id" => '10', "username" => "user10" , "password" => "user10" , 'role' => '0' , 'age' => '46');
             private static $loginSimpleUser11 = array( "id" => '11', "username" => "user11" , "password" => "user11" , 'role' => '0' , 'age' => '26');





            private static $users;


             

        
        public static function getUsers(){

            self :: $users = array(self::$loginAdminUser , self:: $loginSimpleUser2 , self:: $loginSimpleUser3 ,
            self:: $loginSimpleUser4 , self::$loginSimpleUser5 , self:: $loginSimpleUser6 , self:: $loginSimpleUser7 ,
            self:: $loginSimpleUser8 , self:: $loginSimpleUser9 , self::$loginSimpleUser10 ,self:: $loginSimpleUser11 );

            return self:: $users;

        }

    }

               

?>

<?php

    Class DatabasePDOConfiguration {

        private $connection= null;

        private $host = "localhost";
        private $username = "root";
        private $dbname = "database";
        private $password = "";

        

        public function createConnection() {

            $this->connection = new PDO("mysql:host = $this->host;dbname=$this->dbname" ,  $this->username , $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            
            
            
        }

        protected function getConnection() {

           $this->createConnection();
           return $this->connection;

       }
        }


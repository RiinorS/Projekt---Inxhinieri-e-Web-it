
<?php

    Class DatabasePDOConfiguration {

        private $connection= null;

        private $host = "localhost";
        private $username = "root";
        private $dbname = "database";
        private $password = "";

        

        public function createConnection() {

            //$this->connection = new PDO("mysql:host = $this->host;dbname=$this->dbName" ,  $this->username , $this->password);

            //$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            
            try{
                $this->connection = new PDO("mysql:host = $this->host;dbname=$this->dbname" ,  $this->username , $this->password ,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC] );
                echo "Lidhja me databazen : {$this->dbname} - {$this->host}: eshte realizuar me sukses!";
            }
            catch (PDOException $pdoe) {
            die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
           }
           return $this->connection;
            
        }

        //protected function getConnection() {

//            $this->createConnection();
  //          return $this->connection;

//        }
        }

                $testDB = new DatabasePDOConfiguration();
                $testDB->createConnection();
    

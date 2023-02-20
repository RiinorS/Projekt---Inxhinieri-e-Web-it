<?php
include_once 'databaseConfig.php';

class MessagesMapper extends DatabasePDOConfiguration {


    private $conn;


    public function __construct() {
        $this->conn = $this->getConnection();
    }

    public function readData(){

        $query = $this->conn->query('SELECT * FROM mesazhe');

        return $query->fetchAll();

    }

    public function insert($request){

        $query = $this->conn->prepare('INSERT INTO mesazhe ( perdoruesi , email , numri , mesazhi) values 
        ( :perdoruesi , :email , :numri , :mesazhi)');

        $query->bindParam(':perdoruesi' , $request['perdoruesi']);
        $query->bindParam(':email' , $request['email']);
        $query->bindParam(':numri' , $request['numri']);
        $query->bindParam(':mesazhi' , $request['mesazhi']);

        $query->execute();



    }

    public function delete($msgId) {

        $query = $this->conn->prepare('DELETE FROM mesazhe WHERE msgid = :id');

        $query->bindParam(':id' , $msgId);
        $query->execute();


    }
}
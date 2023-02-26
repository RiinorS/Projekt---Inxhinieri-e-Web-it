<?php
include_once 'databaseConfig.php';

class OrdersMapper extends DatabasePDOConfiguration {


    private $conn;


    public function __construct() {
        $this->conn = $this->getConnection();
    }

    public function readData(){

        $query = $this->conn->query('SELECT * FROM porosite');

        return $query->fetchAll();

    }

    public function insert($request){

        // $request['foto'] = '../images/' .$request['foto'];
        $query = $this->conn->prepare('INSERT INTO porosite ( emri , mbiemri , adresa , komuna , numri , produkti)
         values ( :emri , :mbiemri , :adresa , :komuna , :numri , :produkti)');

        $query->bindParam(':emri' , $request['emri']);
        $query->bindParam(':mbiemri' , $request['mbiemri']);
        $query->bindParam(':adresa' , $request['adresa']);
        $query->bindParam(':komuna' , $request['komuna']);
        $query->bindParam(':numri' , $request['numri']);
        $query->bindParam(':produkti' , $request['produkti']);



        $query->execute();



    }


    public function delete($porosiaId) {

        $query = $this->conn->prepare('DELETE FROM porosite WHERE porosiaid = :id');

        $query->bindParam(':id' , $porosiaId);
        $query->execute();


    }


    public function getProductById($porosiaId) {
        
        
        $query = "SELECT * FROM porosite WHERE porosiaid = :id ";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $porosiaId);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);

        
      }






}








?>
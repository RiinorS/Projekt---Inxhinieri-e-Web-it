<?php
include_once 'databaseConfig.php';

class ProductsMapper extends DatabasePDOConfiguration {


    private $conn;


    public function __construct() {
        $this->conn = $this->getConnection();
    }

    public function readData(){

        $query = $this->conn->query('SELECT * FROM produkte');

        return $query->fetchAll();

    }

    public function insert($request){

        $request['foto'] = '../images/' .$request['foto'];
        $query = $this->conn->prepare('INSERT INTO produkte ( foto , titulli , pershkrimi , cmimi) values 
        ( :foto , :titulli , :pershkrimi , :cmimi)');

        $query->bindParam(':foto' , $request['foto']);
        $query->bindParam(':titulli' , $request['titulli']);
        $query->bindParam(':pershkrimi' , $request['pershkrimi']);
        $query->bindParam(':cmimi' , $request['cmimi']);

        $query->execute();



    }


    public function edit($productId){

        $query = $this->conn->prepare('SELECT * FROM produkte WHERE productid = :id ');
        $query->bindParam(':id' , $productId);
        $query->execute();

        return $query->fetch();

    }

    public function update($request , $productId) {


        $query = $this->conn->prepare('UPDATE produkte SET foto = :foto , titulli = :titulli , 
            pershkrimi = :pershkrimi , cmimi = :cmimi WHERE productid = :id'
        );

        $query->bindParam(':foto' , $request['foto']);
        $query->bindParam(':titulli' , $request['titulli']);
        $query->bindParam(':pershkrimi' , $request['pershkrimi']);
        $query->bindParam(':cmimi' , $request['cmimi']);

        $query->bindParam(':id' , $productId);


        $query->execute();
        // return header('Location: ../phpfaza2/dashboard.php');

        
    }


    public function delete($productId) {

        $query = $this->conn->prepare('DELETE FROM produkte WHERE productid = :id');

        $query->bindParam(':id' , $productId);
        $query->execute();
        // return header('Location: ../phpfaza2/dashboard.php');


    }






}








?>
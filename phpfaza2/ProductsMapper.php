<?php
require_once '../phpfaza2/databaseConfig.php';

class ProductsMapper {

    public $db;

    public function _construct(){

        $this->db = new DatabasePDOConfiguration;

    }

    public function readData(){

        $query = $this->db->pdo->query('select * from produkte');

        return $query->fetchAll();

    }

    public function insert($request){

        $query = $this->db->conn->prepare('INSERT INTO produkte ( foto , titulli , pershkrimi , cmimi) values 
        ( :foto , :titulli , :pershkrimi , :cmimi)');

        $query->bindParam(':foto' , $request['foto']);
        $query->bindParam(':titulli' , $request['titulli']);
        $query->bindParam(':pershkrimi' , $request['pershkrimi']);
        $query->bindParam(':cmimi' , $request['cmimi']);

        $query->execute();

        return header('Location: ../phpfaza2/dashboard.php');


    }


    public function edit($productid){

        $query = $this->db->conn->prepare('SELECT * FROM produkte WHERE id = :id ');
        $query->bindParam(':id' , $productid);
        $query->execute();

        return $query->fetch();

    }

    public function update($request , $productid) {


        $query = $this->db->conn->prepare('UPDATE produkte SET foto = :foto , titulli = :titulli , pershkrimi = :pershkrimi , cmimi = :cmimi WHERE productid = :productid');

        $query->bindParam(':foto' , $request['foto']);
        $query->bindParam(':titulli' , $request['titulli']);
        $query->bindParam(':pershkrimi' , $request['pershkrimi']);
        $query->bindParam(':cmimi' , $request['foto']);

        $query->bindParam(':productid' , $productid);


        $query->execute();
        return header('Location: ../phpfaza2/dashboard.php');

        
    }


    public function delete($productid) {

        $query = $this->db->conn->prepare('DELETE FROM produkte WHERE productid = :productid');

        $query->bindParam('productid' , $productid);
        $query->execute();
        return header('Location: ../phpfaza2/dashboard.php');


    }






}








?>
<?php require '../phpfaza2/OrdersMapper.php';
require '../phpfaza2/menu-anash.php';  ?>

<!DOCTYPE html>
<html>
  
  <body>
  <table>
  <thead>
    
    <div class="koka-tabeles">
        <h2>Porositë</h2>
    </div>
    <tr>
      <th>ID</th>
      <th>Emri</th>
      <th>Mbiemri</th>
      <th>Adresa</th>
      <th>Komuna/Qyteti</th>
      <th>Numri kontaktues</th>
      <th>Veprimi</th>


      
    </tr>
  </thead>
  <tbody>
    


    <?php
       
        $model = new OrdersMapper();
        $rows = $model->readData();
        foreach ($rows as $row) { 
    ?> 
        <tr>
            <td>
                <?php echo $row['porosiaid'] ?>
            </td>
            <td>
                <?php echo $row['emri'] ?>
            </td>
            
            <td>
                <?php echo $row['mbiemri']; ?>
            </td>
            
            <td>
                <?php echo $row['adresa']; ?>
            </td>
            
            <td>
                <?php echo $row['komuna']; ?>
            </td>
            
            <td>
                <?php echo $row['numri']; ?>
            </td>

           
            <td> <a href="fshijPorosi.php?id=<?php echo $row['porosiaid']; ?>"> <button class="fshij" >Fshij</button></a></td>
        </tr> 


    <?php
        };
    ?>


    </tbody>
</table>



  </body>
</html> 
 <style>
table {
  border-collapse: collapse;
  width: 70%;
  margin : 100px 310px;
  padding-top: 0px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

th {
  font-weight: bold;
  
}

thead {
  background-color: #f2f2f2;
}

thead th:first-child {
  text-align: center;
}

button {
  justify-content: center;
  border: none;
  cursor: pointer;
  padding: 5px 10px;
  border-radius: 3px;
  font-size: 14px;
  font-weight: bold;
}

button:hover {
  opacity: 0.8;
}

button.ndrysho {
  background-color: orange;
  color: white;
}

button.fshij {
  background-color: red;
  color: white;
}

.koka-tabeles{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 0px;
  margin-left: 305px;
  margin-bottom: -58px;
}

.koka-tabeles h2{
    color: black;
}



.shto-perdoruesin{
    
    background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  margin-right: 75px;
}


</style>


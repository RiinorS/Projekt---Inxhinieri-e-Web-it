<?php include '../components/menu-anash.php';  ?>
<!DOCTYPE html>
<html>
  
  <body>
  <table>
  <thead>
    
    <div class="koka-tabeles">
        <h2>Përdoruesit e regjistruar</h2>
        <button class="shto-perdoruesin" onclick="redirectShtoPerdorues()"  >Shto përdorues</button>
    </div>
    <tr>
      <th>ID</th>
      <th>Emri</th>
      <th>Mbiemri</th>
      <th>Roli</th>
      
      <th colspan="2" style="text-align: center;" >Veprimi</th>
    </tr>
  </thead>
  <tbody>
    


    <?php
        require '../phpfaza2/UserMapper.php';
        $model = new UserMapper();
        $rows = $model->getAllUsers();
        foreach ($rows as $row) {
    ?>
        <tr>
            <td>
                <?php echo $row['userid'] ?>
            </td>
            
            <td>
                <?php echo $row['username']; ?>
            </td>
            
            <td>
                <?php echo $row['userlastname']; ?>
            </td>
            
            <td>
                <?php echo $row['roleName']; ?>
            </td>
            
          
            <td> <a href="ndryshoPerdorues.php?id=<?php echo $row['userid']; ?>"> <button class="ndrysho">Ndrysho</button></a></td>
            <td> <a href="fshijPerdorues.php?id=<?php echo $row['userid']; ?>"> <button class="fshij" >Fshij</button></a></td>
        </tr>

    <?php
        }
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

.open-deletepopup{
    top: 50%;
    transform: translate(-50% , -50%) scale(1) ;
}
</style>

<script>
  
  function redirectShtoPerdorues(){
    window.location.href = '../phpfaza2/shtoPerdorues.php';
  }
</script>
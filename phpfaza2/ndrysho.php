<?php
include_once '../phpfaza2/UserMapper.php';  
require '../components/menu-anash.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}




?>
   


  

   <div class='mbajtesi-ndrysho'>
        
        <form class="forma-ndrysho" action="../phpfaza2/editUser.php" method="get">
            <div class="login forms form-style">
            <h1>Ndrysho përdoruesin</h1>
                <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
                <label class="label" for="">Emri</label>
                <input type="text" name='username' class="input" placeholder="Emri" value=<?php echo $user['username']; ?> />
                <label class="label" for="">Mbiemri</label>
                <input type="text" name='lastname' class="input" placeholder="Mbiemri" value=<?php echo $user['userlastname']; ?> />
                <label class="label" for="">Passwordi</label>
                <input type="password" name='password' class="input" placeholder="Passwordi" value=<?php echo $user['password']; ?> />
               

                <input id="ndrysho-btn" type="submit" name="ndrysho-btn"  class="input submit" value="Ndrysho"  />
            </div>
        </form>
    </div>



    

    <style>
    .mbajtesi-ndrysho {
  margin: 0 auto;
  max-width: 800px;
  padding-left: 250px;
  padding-top: 80px ;
}

h1 {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 25px;
  padding-left: 114px;
  color: black;
  
}

.forma-ndrysho {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.login {
  width: 100%;
  max-width: 500px;
  background-color: #f9f9f9;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.forms {
  margin-bottom: 20px;
}

.form-style {
  display: flex;
  flex-direction: column;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.label {
  font-weight: bold;
  margin-bottom: 10px;
}

.input {
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.submit {
  background-color: orange ;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}



.label{
  margin-left: 9px;
}





</style>
 



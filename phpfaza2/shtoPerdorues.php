<?php
include_once '../phpfaza2/UserMapper.php';  
include_once '../phpfaza2/simpleUser.php';
require '../components/menu-anash.php';
if (isset($_POST['shto-btn'])) {
    
    
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];

    $user = new SimpleUser($username, $lastname, 0, $password);

    $mapper = new UserMapper();
    $mapper->insertUser($user);

    header("Location:../phpfaza2/shto.php");}
?>
   


  

   <div class='mbajtesi-shto'>
        
        <form class="forma-shto"  method="post">
            <div class="login forms form-style">
            <h1>Shto përdoruesin</h1>
                
                <label class="label" for="">Emri</label>
                <input type="text" name='username' class="input" placeholder="Emri"  />
                <label class="label" for="">Mbiemri</label>
                <input type="text" name='lastname' class="input" placeholder="Mbiemri"  />
                <label class="label" for="">Passwordi</label>
                <input type="password" name='password' class="input" placeholder="Passwordi"  />
               

                <input id="shto-btn" type="submit" name="shto-btn"  class="input submit" value="Shto"  />
            </div>
        </form>
    </div>



    

    <style>
    .mbajtesi-shto {
  margin: 0 auto;
  max-width: 800px;
  padding-left: 250px;
  padding-top: 80px ;
}

h1 {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 25px;
  padding-left: 130px;
  color: black;
  
}

.forma-shto {
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
  background-color: green ;
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
 
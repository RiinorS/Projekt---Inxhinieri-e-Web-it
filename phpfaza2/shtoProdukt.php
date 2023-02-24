<?php
require 'ProductsMapper.php';  
include '../components/menu-anash.php';


if (isset($_POST['shto-btn'])) {
    
    
    $mapper = new ProductsMapper();
    $mapper->insert($_POST);

    header("Location:../phpfaza2/shtoprodPopup.php");
}
?>
   


  

   <div class='mbajtesi-shto'>
        
        <form class="forma-shto"  method="POST">
            <div class="login forms form-style">
            <h1>Shto produktin</h1>
                
                <label class="label" for="">Foto</label>
                <input type="file" name='foto' class="input"   />
                <label class="label" for="">Titulli</label>
                <input type="text" name='titulli' class="input"   />
                <label class="label" for="">Përshkrimi</label>
                <input type="text" name='pershkrimi' class="input"  />
                <label class="label" for="">Cmimi</label>
                <input type="text" name='cmimi' class="input"   />
                
               

                <input id="shto-btn" type="submit" name="shto-btn"  class="input submit" value="Shto"  />
            </div>
        </form>
    </div>



    

    <style>
    .mbajtesi-shto {
  margin: 0 auto;
  max-width: 800px;
  padding-left: 250px;
  padding-top: 40px ;
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
 
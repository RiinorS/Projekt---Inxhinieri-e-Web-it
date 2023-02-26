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
        
        <form class="forma-shto"  method="POST" id="shto-form" onsubmit="return validimiShtoProdukt()" >
            <div class="login forms form-style">
            <h1>Shto produktin</h1>
                
                <label class="label" for="">Foto</label>
                <input type="file" id="shto-foto" name='foto' class="input"   />
                <label class="label" for="">Titulli</label>
                <input type="text" id="shto-titull" name='titulli' class="input"   />
                <label class="label" for="">Përshkrimi</label>
                <input type="text" id="shto-pershkrim" name='pershkrimi' class="input"  />
                <label class="label" for="">Cmimi</label>
                <input type="text" id="shto-cmim" name='cmimi' class="input"   />
                
               

                <input id="shto-btn" type="submit" name="shto-btn"  class="input submit" value="Shto"  />
            </div>
        </form>
    </div>

    <?php 
      echo 
        '<script>
            document.getElementById("shto-form").addEventListener("submit", function(event) {
            var foto = document.getElementById("shto-foto").value;
            var titulli = document.getElementById("shto-titull").value;
            var pershkrimi = document.getElementById("shto-pershkrim").value;
            var cmimi = document.getElementById("shto-cmim").value;
  

            if (foto == "") {
              alert("Ju lutem kontrolloni që foto mos të jetë e zbrazët!");
              event.preventDefault(); 
            }    

            if (titulli == "") {
              alert("Ju lutem kontrolloni që titulli mos të jetë i zbrazët!");
              event.preventDefault(); 
            }

            if (pershkrimi == "") {
              alert("Ju lutem kontrolloni që përshkrimi mos të jetë i zbrazët!");
              event.preventDefault(); 
            }

            if (cmimi == "") {
              alert("Ju lutem kontrolloni që cmimi mos të jetë i zbrazët!");
              event.preventDefault(); 
            } 

          });
        </script>';
    ?>


    

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

 
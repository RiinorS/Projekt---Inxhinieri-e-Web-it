<?php
require_once 'ProductsMapper.php';  
require '../components/menu-anash.php';

if (isset($_GET['id'])) {
  $productId = $_GET['id'];
}


  $mapper = new ProductsMapper();
  $product = $mapper ->edit($productId);


  if(isset($_POST['ndrysho-buton'])){
    $mapper->update($_POST,$productId);
  }
?>
   


  

  <div class='mbajtesi-ndrysho'>
        
        <form class="forma-ndrysho" action="ndryshoprodPopup.php" method="post" id="ndrysho-produkt" >
            <div class="login forms form-style">
            <h1>Ndrysho produktin</h1>
                <label class="label" for="">Foto</label>
                <input type="file" id="ndrysho-foto" name='foto' class="input" placeholder="Foto" value="<?php echo $product['foto']; ?> "/>
                <label class="label" for="">Titulli</label>
                <input type="text" id="ndrysho-titull" name='titulli' class="input" placeholder="Titulli" value="<?php echo $product['titulli']; ?> "/>
                <label class="label" for="">Përshkrimi</label>
                <input type="text" id="ndrysho-pershkrim" name='pershkrimi' class="input" placeholder="Përshkrimi" value="<?php echo $product['pershkrimi']; ?> "/>
                <label class="label" for="">Cmimi</label>
                <input type="text" id="ndrysho-cmim" name='cmimi' class="input" placeholder="Cmimi" value="<?php echo $product['cmimi']; ?>" />

                <input id="ndrysho-btn" type="submit" name="ndrysho-buton"  class="input submit" value="Ndrysho"  />
            </div>
        </form>
    </div>


    
    <?php 
      echo 
        '<script>
            document.getElementById("ndrysho-produkt").addEventListener("submit", function(event) {
            var foto = document.getElementById("ndrysho-foto").value;
            var titulli = document.getElementById("ndrysho-titull").value;
            var pershkrimi = document.getElementById("ndrysho-pershkrim").value;
            var cmimi = document.getElementById("ndrysho-cmim").value;
  

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
    .mbajtesi-ndrysho {
  margin: 0 auto;
  max-width: 800px;
  padding-left: 250px;
  padding-top: 40px ;
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
 



<?php 
  require 'ProductsMapper.php';
  require_once 'OrdersMapper.php';

?>

<title>Blej tani - Rini Tech  </title>

<link href="../css_code/style.css" rel="stylesheet" type="text/css">
<!-- Navigimi i faqes -->
<header>

<div class="logo">RINI <span class="tech">  Tech</span></div>

<nav class="nav-bar">

               <ul>
               <?php
                session_start();
                  if(isset($_SESSION['role']) && $_SESSION['role'] == 1 ) {
                ?>
                  <li> <a href="../phpfaza2/dashboard.php"> Dashboard  </a> </li>

                <?php
                }

                ?>
            
            <li> <a href="faqja.php" >Faqja </a>  </li>
            <li> <a href="produktet.php" class="active" >Produktet  </a> </li>
            <li> <a href="rrethnesh.php"> Rreth Nesh  </a> </li>
            <li> <a href="kontakti.php"> Kontakti  </a> </li>
            
        </ul>                
</nav>

<div class="icons">
  <!-- <a href="index.php"> <img src="../images/log.png"  width="23px" height="17px"> Kyçuni</a> -->
  <a href="../php_code/ckycuni.php"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>
</div>

</header> 

  
    <?php
  if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    $products = new ProductsMapper();
    $product = $products->getProductById($productId);

    echo '<div class="mbajtesi-blej-tani">
            <div class="karta-e-produktit">
              <img src="' . $product['foto'] . '">
              <div class="detajet-e-produktit">
                <span class="titulli-i-produktit">' . $product['titulli'] . '</span>
                <p>' . $product['pershkrimi'] . '</p>
                <div class="cmimi-i-produktit">' . $product['cmimi'] . '€ </div>

              </div>
              
            </div>
            <div class="mbajtesi-porosise">
            <form class="forma-porosise" id="porosi-form" method="post">
                <h1>Blej tani</h1>
                <label class="label" for="">Emri</label>
                <input type="text" id="emri_blej" name="emri" class="input" />
                <label class="label" for="">Mbiemri</label>
                <input type="text" id="mbiemri_blej" name="mbiemri" class="input" />
                <label class="label" for="">Adresa</label>
                <input type="text" id="adresa_blej" name="adresa" class="input" />
                <label class="label" for="">Komuna/Qyteti</label>
                <input type="text" id="komuna_blej" name="komuna" class="input" />
                <label class="label" for="">Numri i telefonit</label>
                <input type="text" id="numri_blej" name="numri" class="input" />
                <label class="label" for="">Shkruani produktin të cilin doni ta bleni</label>
                <input type="text" id="produkti_blej" name="produkti" class="input" />
                <input id="blej-btn" type="submit" name="blej-btn" class="input submit" "  value="Blej"/>
              </form>
            </div>
          </div>';
         
  }
?>


<?php

if (isset($_POST['blej-btn'])) {
    
  $mapper = new OrdersMapper();
  $mapper->insert($_POST);

  header("Location:../phpfaza2/porosiapopup.php");
}
?>

<?php
    echo 
        '<script>
              document.getElementById("porosi-form").addEventListener("submit", function(event) {
                var emri = document.getElementById("emri_blej").value;
                var mbiemri = document.getElementById("mbiemri_blej").value;
                var adresa = document.getElementById("adresa_blej").value;
                var komuna = document.getElementById("komuna_blej").value;
                var numri = document.getElementById("numri_blej").value;
                var produkti = document.getElementById("produkti_blej").value;

                if (emri == "") {
                  alert("Ju lutem kontrolloni që emri mos të jetë i zbrazët!");
                  event.preventDefault(); 
                }
                if (mbiemri == "") {
                  alert("Ju lutem kontrolloni që mbiemri mos të jetë i zbrazët!");
                  event.preventDefault(); 
                }  
                if (adresa == "") {
                  alert("Ju lutem kontrolloni që adresa mos të jetë e zbrazët!");
                  event.preventDefault(); 
                }  
                if (komuna == "") {
                  alert("Ju lutem kontrolloni që komuna mos të jetë e zbrazët!");
                  event.preventDefault(); 
                }  
                if (numri == "") {
                  alert("Ju lutem kontrolloni që numri mos të jetë i zbrazët!");
                  event.preventDefault(); 
                }  
                if (produkti == "") {
                  alert("Ju lutem kontrolloni që produkti të cilin doni ta porositni mos të jetë i zbrazët!");
                  event.preventDefault(); 
                }    
              });
          </script>';
?>


<style>

*{
    font-family: sans-serif;
}
  .mbajtesi-blej-tani {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 15px;
  }
  h1{
    text-align: center;
  }

  .karta-e-produktit {
    flex: 1 1 40%;
    margin-right: 30px;
    display: flex;
    align-items: center;
    /* background-color: #f2f2f2; */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .karta-e-produktit img {
    margin-right: 30px;
    width: 200px;
    height: 200px;
  }

  .detajet-e-produktit {
    flex: 1 1 60%;
  }

  .titulli-i-produktit {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    display: block;
  }

  .cmimi-i-produktit {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 30px;
    /* margin-left: 35px; */
  }

  .mbajtesi-porosise {
    flex: 1 1 40%;
    margin-left: 26px;
  }

  .forma-porosise {
    background-color: #f2f2f2;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    text-align: left;
    margin-top: 8px;
  }

  .input {
    display: block;
    width: 100%;
    padding: 10px;
    border: 2px solid #ddd;
    border-radius: 5px;
  }

  #blej-btn{
    background: green;
    cursor: pointer;
    margin-top: 20px;
    color: white;
    font-size: larger;
  }
  
  </style>

   <?php include '../components/footer.php'; ?>

<?php 
    require '../components/header.php';
    require 'ProductsMapper.php';
    require_once 'OrdersMapper.php';

?>

<title>Blej tani - Rini Tech  </title>

    <link href="../css_code/style.css" rel="stylesheet" type="text/css">


  
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
              <form class="forma-porosise" method="post">
                <h1>Blej tani</h1>
                <label class="label" for="">Emri</label>
                <input type="text" name="emri" class="input" />
                <label class="label" for="">Mbiemri</label>
                <input type="text" name="mbiemri" class="input" />
                <label class="label" for="">Adresa</label>
                <input type="text" name="adresa" class="input" />
                <label class="label" for="">Komuna/Qyteti</label>
                <input type="text" name="komuna" class="input" />
                <label class="label" for="">Numri i telefonit</label>
                <input type="text" name="numri" class="input" />
                <input id="blej-btn" type="submit" name="blej-btn" class="input submit" value="Blej"/>
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

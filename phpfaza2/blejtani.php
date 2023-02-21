<?php 
    include '../components/header.php';
    include '../phpfaza2/ProductsMapper.php';
?>
    <link rel ="icon" type="image/png" href="../images/favicon.jpg">
    <link href="../css_code/style.css" rel="stylesheet" type="text/css">







    
  <?php
$products = new ProductsMapper();

$productId = $_GET['productid'];
$product = $products->getProductById($productId);


if(!$product) {
  echo '
  <div class="kartat">
      <img src="' .$product['foto'] . '" width="230px" height="230px">
      <div class="permbajtja-produkteve">
        <span class="titujt"> '.$product['titulli'] .'</span>
        <p>'.$product['pershkrimi'] .'</p>
      </div>
      
      <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">'.$product['cmimi'] .' € </div>
      </div>

    </div>
  ';
}
else {
  echo 'errori';
}

?>

    <div class='mbajtesi-shto'>
        
        <form class="forma-shto"  method="post">
            <div class="login forms form-style">
            <h1>Blej tani</h1>
                
                <label class="label" for="">Perdoruesi</label>
                <input type="text" name='perdoruesi' class="input" placeholder="Perdoruesi"  />
                <label class="label" for="">Numri kontaktues</label>
                <input type="text" name='numri' class="input" placeholder="Numri"  />
                <label class="label" for="">Adresa</label>
                <input type="text" name='adresa' class="input" placeholder="Adresa"  />
                

               

                <input id="shto-btn" type="submit" name="shto-btn"  class="input submit" value="Shto"  />
            </div>
        </form>
    </div>



    <?php 
    include '../components/footer.php';
?>

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
 
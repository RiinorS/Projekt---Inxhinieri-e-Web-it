<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faqja - Rini Tech  </title>
    <link rel ="icon" type="image/png" href="../images/favicon.jpg">
    <link href="../css_code/style.css" rel="stylesheet" type="text/css">
    

</head>
<body>

 
  <!-- Navigimi i faqes -->
<header>

  <div class="logo">RINI <span class="tech">  Tech</span></div>
    
  <nav class="nav-bar">

    <ul>
      <?php
          if(isset($_SESSION['role']) && $_SESSION['role'] == 1 ) {
      ?>
      <li> <a href="../phpfaza2/dashboard.php"> Dashboard  </a> </li>

      <?php
        } 
      ?>
                  
      <li> <a href="faqja.php" class="active" >Faqja </a>  </li>
      <li> <a href="produktet.php"> Produktet  </a> </li>
      <li> <a href="rrethnesh.php"> Rreth Nesh  </a> </li>
      <li> <a href="kontakti.php"> Kontakti  </a> </li>
    
    </ul>                
  </nav>

  <div class="icons">
    <?php
      if(!isset($_SESSION['role']) ) {
    ?>

    <a href="index.php"> <img src="../images/log.png"  width="23px" height="17px"> Kyçuni</a>
        
    <?php
      }
      else {
    ?>
    <a href="../php_code/ckycuni.php"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>
    <?php
      }
    ?>
  </div>
  
</header> 






    <!-- Faqja kryesore -->


   <!-- Fillimi i reklames se pare -->


    <marquee scrollamount="10" bgcolor="red" direction="left" height="50px" width="100%"   font-size="x-large" ><font size="large"></font>
      <h1> Porositni produktet për të cilat keni pritur tërë vitin!</h1>
    </marquee>












   <!-- Fillimi i reklames se dyte me slider  -->


    <div id="slideri "> 
      <img src="" id = "slider" >
    </div>
       

    <button class="butoni-blej" onclick="redirect()">Blej tani</button>


    
    <!-- Mbarimi i reklames se dyte me slider dhe butonin blej -->


    <!-- Fillimi i dy kompanive te produkteve -->

    <div class="3produktet" >
            
        <ul class="kompanite">

            <li>Produkte nga Apple</li>
            <li>Produkte nga Hyper X</li>
            <li>Produkte nga Xiaomi</li>

        </ul>
    </div>

    <div class="reklama3">

        
       

        <div class="kompania">
          <img src="../images/fromApple.jpg" alt="Apple" style="width:100%">
        </div>
        <div class="kompania">
          <img src="../images/fromHyperX.jpg" alt="HyperX" style="width:100%">
        </div>
        <div class="kompania">
          <img src="../images/fromXiaomi.png" alt="Xiaomi" style="width:100%">
        </div>

    </div>

    <!-- Fillimi i footerit   -->
    <!-- <div class="footer">
      <div class="footer-column">
        <h4>Dyqani</h4>
          <ul>
            <li><a href="faqja.html">Faqja</a></li>
            <li><a href="produktet.html">Produkte</a></li>
            <li><a href="rrethnesh.html">Rreth nesh</a></li>
            <li><a href="kontakti.html">Kontakti</a></li>

            </ul>
      </div>

      <div class="footer-column">
            <ul>
              <h4>Shërbime</h4>
              <li>Dërgesa të shpejta</li>
              <li>Pagesa të sigurta</li>
              <li>Produkte origjinale</li>
            </ul>
      </div>

      <div class="footer-column">
            <ul>
              <h4>Informata</h4>
              <li>Adresa : Rr."Skenderbeu" - Lipjan</li>
              <li>Email : infoRini-Tech@gmail.com</li>
              <li>Telefoni : 045499539</li>
         
            </ul>
    </div> -->


   <?php include '../components/footer.php' ;  ?> 
  

  <!-- Mbarimi i footerit   -->

  





<script src="../js_code/script.js"></script>
</body>
</html>
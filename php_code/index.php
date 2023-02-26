
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kycu - Rini Tech  </title>
    <link rel ="icon" type="image/png" href="../images/favicon.jpg">
    <link href="../css_code/style.css" rel="stylesheet">
    
</head>
<body>


 <!-- Navigimi i faqes -->

 <header>

  <div class="logo">RINI <span class="tech">  Tech</span></div>

  <nav class="nav-bar">

          <ul>
              
            <li> <a href="faqja.php" >Faqja </a>  </li>
            <li> <a href="produktet.php"> Produktet  </a> </li>
            <li> <a href="rrethnesh.php"> Rreth Nesh  </a> </li>
            <li> <a href="kontakti.php"> Kontakti  </a> </li>
              
          </ul>                
  </nav>

 

</header> 



  <!-- Faqja Kycuni - Regjistrohuni -->

<div class="mbajtesikr">
  <div class="formakr">
      <div class="butonatkr">
          <div id="butonikr"></div>
          <button type="button" class="nderrimibutonave" onclick="kycuni()"  >  Kyçuni</button>
          <button type="button" class="nderrimibutonave" onclick="regjistrohuni()" > Regjistrohuni</button>
      </div>

      <form action="../phpfaza2/loginVerify.php"  id="kycuni" class="input-grupi" method="post">
          <input type="text" id="perdoruesi_kycuni"  class="input-fusha" name="username"  placeholder="Emri" >
          <input type="password" id="fjalekalimi_kycuni"  class="input-fusha" name="password" placeholder="Fjalekalimi" >
          <button type="submit" id="butoni-kycu" class="butoni-submit" name= "login-btn"   >Kyçuni</button>

      </form>

      <form   action="../phpfaza2/loginVerify.php" id="regjistrohuni"  method="post" class="input-grupi"  >
          <input type="text" name="register-username"  id="email_regjistrohuni" class="input-fusha" placeholder="Emri"  >
          <input type="text" name="register-lastname"  id="perdoruesi_regjistrohuni" class="input-fusha" placeholder="Mbiemri"   >
          <input type="password" name="register-password"  id="fjalekalimi_regjistrohuni" class="input-fusha" placeholder="Fjalëkalimi" >
          <input type="checkbox" class="tick-kutia"  > <span class="tickkr" >Unë pajtohem me kushtet dhe përmbajtjen e privatësisë</span>
          <button type="submit" class="butoni-submit" name="register-btn"   >Regjistrohuni</button>

      </form>
<?php
      echo 
      '<script>
          document.getElementById("regjistrohuni").addEventListener("submit", function(event) {
          var emri = document.getElementById("email_regjistrohuni").value;
          var mbiemri = document.getElementById("perdoruesi_regjistrohuni").value;
          var fjalekalimi = document.getElementById("fjalekalimi_regjistrohuni").value;


          var regEm = /^[a-zA-Z]{3,}$/;

    var regexEmri = regEm.test(emri);

    if(!regexEmri){
        alert("Ju lutem kontrolloni që emri të përmbajë minimum 3 shkronja!");
        event.preventDefault(); 

      }


    // mbiemri te kete te pakten 3 shkronja


    var regMb = /^[a-zA-Z]{3,}$/;

    var regex_Mbiemri = regMb.test(mbiemri);

    if(!regex_Mbiemri){
        alert("Ju lutem kontrolloni që mbiemri të përmbajë minimum 3 shkronja!");
        event.preventDefault(); 

    }


    // fjalekalimi duhet te kete minimum 5 karaktere dhe te permbaje 1 numer

    var regFjalekalimi = /^[a-zA-Z]{3,}.*\d/;

    var regex_Fjalekalimi = regFjalekalimi.test(fjalekalimi);

    if(!regex_Fjalekalimi){
        alert("Ju lutem kontrolloni që fjalëkalimi të përmbajë minimum 3 shkronja dhe te paktën 1 numer!");
        event.preventDefault(); 

    }

        });
      </script>';
  ?>


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

  <?php  include '../components/footer.php'  ?>

<!-- Mbarimi i footerit   -->


  <script src="../js_code/script.js"></script>
</body>
</html>
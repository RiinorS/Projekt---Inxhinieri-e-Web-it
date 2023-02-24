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
                  <?php
                  session_start();
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 1 ) {
                  ?>
                    <li> <a href="../phpfaza2/views/dashboard.php"> Dashboard  </a> </li>

                  <?php
                  }

                  ?>

            <li> <a href="faqja.php" >Faqja </a>  </li>
            <li> <a href="produktet.php"> Produktet  </a> </li>
            <li> <a href="rrethnesh.php"> Rreth Nesh  </a> </li>
            <li> <a href="kontakti.php"> Kontakti  </a> </li>
              
          </ul>                
  </nav>

  <div class="icons">
  <!-- <a href="index.php"> <img src="../images/log.png"  width="23px" height="17px"> Kyçuni</a> -->
  <!-- <a href="#"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>    -->
   
  </div>
  <!-- <a href="#"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>    -->

  <!-- <a href="#"> Çkyçuni </a> -->

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

      <form   action="../phpfaza2/loginVerify.php" id="regjistrohuni"  method="post" class="input-grupi" onsubmit="return validimiRegjistrohuni()" >
          <input type="text" name="register-username"  id="email_regjistrohuni" class="input-fusha" placeholder="Emri" required >
          <input type="text" name="register-lastname"  id="perdoruesi_regjistrohuni" class="input-fusha" placeholder="Mbiemri" required  >
          <input type="password" name="register-password"  id="fjalekalimi_regjistrohuni" class="input-fusha" placeholder="Fjalëkalimi" required>
          <input type="checkbox" class="tick-kutia" required > <span class="tickkr" >Unë pajtohem me kushtet dhe përmbajtjen e privatësisë</span>
          <button type="submit" class="butoni-submit" name="register-btn"   >Regjistrohuni</button>

      </form>

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
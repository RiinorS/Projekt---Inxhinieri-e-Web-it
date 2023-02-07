<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kycuni & Regjistrohuni - Rini Tech  </title>

    <link href="style.css" rel="stylesheet">
</head>
<body>


 <!-- Navigimi i faqes -->

 <header>

  <div class="logo">RINI <span>  Tech</span></div>

  <nav class="nav-bar">

          <ul>
              
            <li> <a href="faqja.html" >Faqja </a>  </li>
            <li> <a href="produktet.html"> Produktet  </a> </li>
            <li> <a href="rrethnesh.html"> Rreth Nesh  </a> </li>
            <li> <a href="kontakti.html"> Kontakti  </a> </li>
              
          </ul>                
  </nav>

  <div class="icons">
    <a href="kycuni-regjistrohuni.html"> <img src="./images/logIn.png"  width="19px"> Kycuni & Regjistrohuni</a>   
  </div>

</header>

  <!-- Faqja Kycuni - Regjistrohuni -->

<div class="mbajtesikr">
  <div class="formakr">
      <div class="butonatkr">
          <div id="butonikr"></div>
          <button type="button" class="nderrimibutonave" onclick="kycuni()"  >Kycuni</button>
          <button type="button" class="nderrimibutonave" onclick="regjistrohuni()" >Regjistrohuni</button>
      </div>

      <form action="#"  id="kycuni" class="input-grupi">
          <input type="text" id="perdoruesi_kycuni"  class="input-fusha" placeholder="Perdoruesi" required>
          <input type="password" id="fjalekalimi_kycuni"  class="input-fusha" placeholder="Fjalekalimi" required>
          <button type="submit" id="butoni-kycu" class="butoni-submit" onclick="validimiKycuni()" >Kycuni</button>

      </form>

      <form action="#" id="regjistrohuni" class="input-grupi">
          <input type="email" id="email_regjistrohuni" class="input-fusha" placeholder="Email" required>
          <input type="text" id="perdoruesi_regjistrohuni" class="input-fusha" placeholder="Përdoruesi" required>
          <input type="password" id="fjalekalimi_regjistrohuni" class="input-fusha" placeholder="Fjalëkalimi" required>
          <input type="checkbox" class="tick-kutia"> <span class="tickkr" >Unë pajtohem me kushtet dhe përmbajtjen e privatësisë</span>
          <button type="submit" class="butoni-submit" onclick="validimiRegjistohuni()" >Regjistrohuni</button>

      </form>

  </div>

</div>

   <!-- Fillimi i footerit   -->
   <div class="footer">
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
  </div>


<!-- Mbarimi i footerit   -->


  <script src="./script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti - Rini Tech</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
   
  <!-- Navigimi i faqes -->
  <header>

   <div class="logo">RINI <span>  Tech</span></div>

   <nav class="nav-bar">

           <ul>
               
             <li> <a href="faqja.html"  >Faqja </a>  </li>
             <li> <a href="produktet.html"> Produktet  </a> </li>
             <li> <a href="rrethnesh.html"> Rreth Nesh  </a> </li>
             <li> <a href="kontakti.html" class="active"> Kontakti  </a> </li>
               
           </ul>                
   </nav>

   <div class="icons">
    <a href="kycuni-regjistrohuni.html"> <img src="./images/logIn.png"  width="19px"> Kycuni & Regjistrohuni</a>   
  </div>

</header>

   <!-- Fillimi i faqes kontakti -->

   <div class="permbajtja-kontaktit">

      <div id="komp"  class="contact-infos">
  
        <div class="infos">
          <img src="./images/address.png"  height="40px" width="40px"  > <p>  Adresa : <span class="comp-infos" > Rr."Skenderbeu" - Lipjan </span>   </p>
  
        
        </div>
        
        <div class="infos">
          <img src="./images/email.png" height="40px" width="40px" > <p> Email : <span class="comp-infos"> infoRini-Tech.com</span> </p>
  
  
        </div>
  
        <div class="infos">
          <img src="./images/tel.png" height="40px" width="40px" > <p> Tel : <span class="comp-infos">045499539</span> </p>
  
  
  
        </div>
  
  
      </div>
  
  
  
  
      <div class="kontakt-forma">
        <h1>Na kontaktoni</h1>
        <div id="prapavija-formave" class="tekst-infot">
          <label>Perdoruesi :</label>
          <input type="text"  id="perdoruesi_kontakto" name="" value="" placeholder="Shënoni përdoruesin">
        </div>
  
        <div id="prapavija-formave" class="tekst-infot">
          <label>Email :</label>
          <input type="email" id="email_kontakto" name="" value="" placeholder="Shënoni email-en tuaj">
        </div>
  
        <div id="prapavija-formave" class="tekst-infot">
          <label>Numri i telefonit :</label>
          <input type="number" id="numri_kontakto" name="" value="" placeholder="Shënoni numrin tuaj të telefonit ">
        </div>
  
        <div id="prapavija-formave"class="tekst-infot">
          <label>Mesazhi juaj :</label>
       
          <textarea id="mesazhi_kontakto" ></textarea>
        
        </div>
        <button type="submit" class="dergo" onclick="kontakti()">Dërgoni</button> 
      </div>
    </div>




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
           <li>ërgesa të shpejta</li>
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


<!-- Mbarimi i footerit    -->


<script src="./script.js"></script>
</body>
</html>
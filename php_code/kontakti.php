<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakti - Rini Tech</title>
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
                  session_start();
                    if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1 ) {
                  ?>
                    <li> <a href="../phpfaza2/dashboard.php"> Dashboard  </a> </li>

                  <?php
                  }

                  ?>

             <li> <a href="faqja.php"  >Faqja </a>  </li>
             <li> <a href="produktet.php"> Produktet  </a> </li>
             <li> <a href="rrethnesh.php"> Rreth Nesh  </a> </li>
             <li> <a href="kontakti.php" class="active"> Kontakti  </a> </li>
               
           </ul>                
   </nav>

   <div class="icons">
      <!-- <a href="index.php"> <img src="../images/log.png"  width="23px" height="17px"> Kyçuni</a> -->
      <a href="../phpfaza2/logOut.php"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>
    </div>

</header> 



   <!-- Fillimi i faqes kontakti -->

   <div class="permbajtja-kontaktit">

      <div id="komp"  class="contact-infos">
  
        <div class="infos">
          <img src="../images/address.png"  height="40px" width="40px"  > <p>  Adresa : <span class="comp-infos" > Rr."Skenderbeu" - Lipjan </span>   </p>
  
        
        </div>
        
        <div class="infos">
          <img src="../images/email.png" height="40px" width="40px" > <p> Email : <span class="comp-infos"> infoRini-Tech.com</span> </p>
  
  
        </div>
  
        <div class="infos">
          <img src="../images/tel.png" height="40px" width="40px" > <p> Tel : <span class="comp-infos">045499539</span> </p>
  
  
  
        </div>
  
  
      </div>
  
    <?php

    require '../phpfaza2/dbconnect/MessagesMapper.php';

    if (isset($_POST['dergo-btn'])) {
    
    
    $mapper = new MessagesMapper();
    $mapper->insert($_POST);

    header("Location:../phpfaza2/mesazhet/msgpopup.php");
    }
    
    ?>

  
    

    <form class="kontakt-forma" method="post" >
        <h1>Na kontaktoni</h1>
        <div id="prapavija-formave" class="tekst-infot">
          <label>Përdoruesi :</label>
          <input type="text"  id="perdoruesi_kontakto" name="perdoruesi" value="" placeholder="Shënoni përdoruesin">
        </div>
  
        <div id="prapavija-formave" class="tekst-infot">
          <label>Email :</label>
          <input type="email" id="email_kontakto" name="email" value="" placeholder="Shënoni email-en tuaj">
        </div>
  
        <div id="prapavija-formave" class="tekst-infot">
          <label>Numri i telefonit :</label>
          <input type="text" id="numri_kontakto" name="numri" value="" placeholder="Shënoni numrin tuaj të telefonit ">
        </div>
  
        <div id="prapavija-formave"class="tekst-infot">
          <label>Mesazhi juaj :</label>
       
          <textarea id="mesazhi_kontakto" name="mesazhi" ></textarea>
        
        </div>
        <button type="submit" class="dergo"  name="dergo-btn"  >Dërgoni</button> 
      </div>
    </form>




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
 </div> -->

 <?php  include '../components/footer.php' ?>


<!-- Mbarimi i footerit    -->


<script src="../js_code/script.js"></script>
</body>
</html>
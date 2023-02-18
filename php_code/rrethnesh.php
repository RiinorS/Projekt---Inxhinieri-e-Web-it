<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rreth Nesh - Rini Tech</title>
        <link rel ="icon" type="image/png" href="../images/favicon.jpg">
        <link rel="stylesheet" href="../css_code/style.css">
        
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

                  <li> <a href="faqja.php">Faqja </a>  </li>
                  <li> <a href="produktet.php"> Produktet  </a> </li>
                  <li> <a href="rrethnesh.php" class="active"> Rreth Nesh  </a> </li>
                  <li> <a href="kontakti.php"> Kontakti  </a> </li>
                    
                </ul>                
        </nav>
    
      <div class="icons">
        <a href="index.php"> <img src="../images/log.png"  width="23px" height="17px"> Kyçuni</a>
        <a href="#"> <img src="../images/logout.png"  width="23px" height="17px"> Çkyçuni</a>
      </div>
    
    </header> 


    

    <!-- Fillimi i faqes rreth nesh -->


    <section class="mbajtesi-rrethnesh">

        <div class="permbajtja-rrethnesh">

            <img src="../images/gadgets2.jpg">
            <div class="tekstet-rrethnesh">

                <h1>Rreth nesh</h1>
                <h5>RINI <span class="nentitulli-rrn">Tech</span></h5>
                <p>Rini Tech është një kompani teknologjike që ofron zgjidhje të personalizuara për bizneset e vogla dhe të mesme. Ne jemi një grup i dedikuar profesionistësh që punojmë me përkushtim për të siguruar që klientët tanë të marrin më të mirën e mundshme të teknologjisë së re për të rritur efikasitetin dhe performancën e tyre. Ne besojmë se teknologjia duhet të jetë në shërbim të njerëzve dhe se ne mund të ndihmojmë bizneset të arrijnë potencialin e tyre të plotë duke u ofruar zgjidhje të përshtatshme dhe të besueshme. Ne jemi të ndërgjegjshëm për nevojat e klientëve tanë dhe përkushtohemi për të ofruar mbështetje të vazhdueshme dhe të besueshme.</p>


            </div>
        </div>
    </section>




    
    <!-- Mbarimi i faqes rreth nesh -->
       
           
         
    
    
    
        <!-- Fillimi i footerit   -->
        <!-- <div class="footer">
            <div class="footer-column">
              <h4>Dyqani</h4>
                <ul>
                    <li> <a href="faqja.html" class="active" >Faqja </a>  </li>
                    <li> <a href="produktet.html"> Produktet  </a> </li>
                    <li> <a href="rrethnesh.html"> Rreth Nesh  </a> </li>
                    <li> <a href="kontakti.html"> Kontakti  </a> </li>
      
                  </ul>
            </div>
      
            <div class="footer-column">
                  <ul>
                    <h4>Sherbime</h4>
                    <li>Dergesa te shpejta</li>
                    <li>Pagesa te sigurta</li>
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
         -->

        <?php include '../components/footer.php'  ?>
      
        <!-- Mbarimi i footerit   -->
      
        
      
    
    
    
    
    
    
    
    
    
    
    </body>
    </html>
<?php require_once '../phpfaza2/ProductsMapper.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet - Rini Tech</title>
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







     <div class="mbajtesi-produkteve">
        <!-- <div class="kartat">
            <img src="../images/iphone14.jpg" width="200px" height="250px">
            <div class="permbajtja-produkteve">
              <span class="titujt">Apple iPhone</span>
                <p>Apple iPhone 14 Plus, 512GB</p>
            </div>
            <div class="pershkrimi-produkteve">

                <div class="cmimi-produkteve">1,787.50 €</div>
                <div class="butoni-shporta">
                   
                   <button onclick="blejtani()" >Shto në shportë</button>
                </div>
            </div>
        </div>
        <div class="kartat">
            <img src="../images/airpods3rdgen.png" width="250px" height="250px">
            <div class="permbajtja-produkteve">
              <span class="titujt"> Apple AirPods</span>
                <p>Apple AirPods (3rd gen.)</p>
            </div>
            <div class="pershkrimi-produkteve">
                <div class="cmimi-produkteve">259.00 €</div>
                <div class="butoni-shporta">
                    
                    <button>Shto në shportë</button>
                </div>
            </div>
        </div>
        <div class="kartat">
            <img src="../images/applewatch.jpg" width="250px" height="250px">
            <div class="permbajtja-produkteve">
              <span class="titujt"> Apple Watch</span>
              <p>Apple Watch SE2 GPS 44mm</p>
                
            </div>
            <div class="pershkrimi-produkteve">
                <div class="cmimi-produkteve">372.00 €</div>
                <div class="butoni-shporta">
                  
                    <button>Shto në shportë</button>
                </div>
            </div>
        </div>


        <div class="kartat">
          <img src="../images/monitor.jpg" width="250px" height="250px">
          <div class="permbajtja-produkteve">
            <span class="titujt"> Monitor Dell</span>
              <p>Monitor Dell UltraSharp U2722D - LED 27"</p>
          </div>
          <div class="pershkrimi-produkteve">
              <div class="cmimi-produkteve">531.50 €</div>
              <div class="butoni-shporta">
                  
                  <button>Shto në shportë</button>
              </div>
          </div>
        </div>

        <div class="kartat">
        <img src="../images/laplenovo.jpg" width="250px" height="250px">
        <div class="permbajtja-produkteve">
          <span class="titujt"> Laptop HP</span>
            <p> Laptop HP Essential 245 G8, 14", 8 GB RAM</p>
        </div>
        <div class="pershkrimi-produkteve">
            <div class="cmimi-produkteve">524.50 €</div>
            <div class="butoni-shporta">
               
                <button>Shto në shportë</button>
            </div>
        </div>
        </div>
        <div class="kartat">
        <img src="../images/0.jpg" width="250px" height="250px">
        <div class="permbajtja-produkteve">
        <span class="titujt"> Televizor Samsung</span>
          <p>Televizor Samsung UE55AU7092UXXH, 55", 4K
          </p>
        </div>
      <div class="pershkrimi-produkteve">
          <div class="cmimi-produkteve">449.50 €</div>
          <div class="butoni-shporta">
              
              <button>Shto në shportë</button>
          </div>
      </div>
    </div>
  <div class="kartat">
    <img src="../images/mouseRazer.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
      <span class="titujt"> Mouse Razer</span>
        <p>Mouse Razer DeathAdder  </p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">39.50 €</div>
        <div class="butoni-shporta">
            
            <button>Shto në shportë</button>
        </div>
    </div>
  </div>

  <div class="kartat">
    <img src="../images/ps5controlller.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
      <span class="titujt"> PS5 kontroller</span>
        <p>Kontroller Sony PS5 DualSense</p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">113.50 €</div>
        <div class="butoni-shporta">
            
            <button>Shto në shportë</button>
        </div>
    </div>
  </div>
  <div class="kartat">
    <img src="../images/kufjeSony.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
        <span class="titujt"> Kufje Sony</span>
        <p>Kufje SONY WH-1000XM3</p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">326.50 €</div>
        <div class="butoni-shporta">
            
            <button>Shto në shportë</button>
        </div>
    </div>
  </div>
  <div class="kartat">
    <img src="../images/bNE.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
      <span class="titujt"> Fanellë  Bad News Eagles</span>
        <p>(Black Edition)</p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">49.50 €</div>
        <div class="butoni-shporta">
          
            <button>Shto në shportë</button>
        </div>
    </div>
  </div>
  <div class="kartat">
    <img src="../images/skuter.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
      <span class="titujt"> Skuter</span>
        <p>Skuter elektrik Xiaomi Mi Scooter</p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">947.50 €</div>
        <div class="butoni-shporta">
           
            <button>Shto në shportë</button>
        </div>
    </div>
  </div>
  <div class="kartat">
    <img src="../images/jbl.jpg" width="250px" height="250px">
    <div class="permbajtja-produkteve">
      <span class="titujt"> JBL </span>
        <p>Zmadhues zëri JBL, 4.2 W</p>
    </div>
    <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">58.35 €</div>
        <div class="butoni-shporta">
            
            <button>Shto në shportë</button>
        </div>
    </div>

  </div> --> 




  <?php

  $products = new ProductsMapper();
  $all = $products -> readData();
  for($i = 0 ; $i < count($all) ; $i++ ){

    echo '
  
    <div class="kartat">
      <img src="' .$all[$i]['foto'] . '" width="230px" height="230px">
      <div class="permbajtja-produkteve">
      <span class="titujt"> '.$all[$i]['titulli'] .'</span>
        <p>'.$all[$i]['pershkrimi'] .'</p>
      </div>
      
      <div class="pershkrimi-produkteve">
        <div class="cmimi-produkteve">'.$all[$i]['cmimi'] .' € </div>
        <div class="butoni-shporta">
          
        <form method="get" action="../phpfaza2/blejtani.php">
                    <input type="hidden" name="id" value="' . $all[$i]['productid'] . '">
                    <button style="padding-left:15px;padding-right:15px;" type="submit" class="blej-btn" name="blej-btn">Blej tani</button>
                </form>

        </div>
    </div>

  </div>
  
  
  
    ';
  }




  ?>

<!-- <button name="blej-btn"  onclick="blejtani()"   >Blej tani</button>  -->

  </div> 

   <!-- Fillimi i footerit   -->
   <!-- <div class="footer">
    <div class="footer-column">
      <h4>Dyqani</h4>
        <ul>
          <li> <a href="faqja.html" >Faqja </a>  </li>
          <li> <a href="produktet.html"></a>Produktet  </a> </li>
          <li> <a href="rrethnesh.html"> Rreth Nesh  </a> </li>
          <li> <a href="kontakti.html"> Kontakti  </a> </li>

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

    <?php include '../components/footer.php'  ?>

<!-- Mbarimi i footerit   -->

</body>
</html>

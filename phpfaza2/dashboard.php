
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rini Tech  </title>
    <link rel ="icon" type="image/png" href="../images/favicon.jpg">
    <link href="../css_code/style.css" rel="stylesheet" type="text/css">
    

</head>
<body>



  <!-- Navigimi i faqes -->
  <header>

<div class="logo">RINI <span>  Tech</span></div>

<nav class="nav-bar">

        <ul>
          <li> <a href="../phpfaza2/dashboard.php" class="active"> Dashboard  </a> </li>
          <li> <a href="../php_code/index.php" >Faqja </a>  </li>
          <li> <a href="../php_code/produktet.php"> Produktet  </a> </li>
          <li> <a href="../php_code/rrethnesh.php"> Rreth Nesh  </a> </li>
          <li> <a href="../php_code/kontakti.php"> Kontakti  </a> </li>


            
        </ul>                
</nav>

    <div class="icons">
    <a href="../php_code/kycuni-regjistrohuni.php"> <img src="../images/log.png"  width="21px" height="17px"> Llogaria</a>   
    </div>

</header> 


<!-- -- Krijimi i faqes dashboard -->


<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Foto</th>
              <th>Titulli</th>
              <th>Pershkrimi</th>
              <th>Cmimi</th>
              
            </tr>
        </thead>
    </table>
</div>


<!-- Dashboard CSS -->

<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: black;
  color: white;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 16px 65px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>






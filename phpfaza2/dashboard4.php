<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rini Tech</title>
</head>
<body>

    <!-- Dashboard header -->
<body>
	<header>
        <!-- <img src="../images/dash.png"> -->
		<h1>Dashboard</h1>
	</header>

	<nav>
		<ul>
			<li><a href="#">Perdoruesit</a></li>
			<li><a href="#">Produktet</a></li>
			<li><a href="#">Mesazhet</a></li>
            <li><a href="#">Faqja</a></li>

		</ul>
	</nav>

    <!-- Dashboard specifikat -->


<section class="container">
  <div class="box">
    <img src="../images/cart2.png" alt="Image 1">
    <div class="text">
      <h2>Produkte</h2>
      <p>700+</p>
    </div>
  </div>
  
  <div class="box">
    <img src="../images/customers.png" alt="Image 2">
    <div class="text">
      <h2>Vizitore</h2>
      <p>500+</p>
    </div>
  </div>
  
  <div class="box">
    <img src="../images/delivery.png" alt="Image 3">
    <div class="text">
      <h2>Porosi</h2>
      <p>1000+</p>
    </div>
  </div>
  
  <div class="box">
    <img src="../images/sale.png" alt="Image 4">
    <div class="text">
      <h2>Zbritje</h2>
      <p>Super Sundays</p>
    </div>
  </div>
</section>


<style>
*{

    font-family: sans-serif;

}
.container {
  display: flex;
  flex-wrap: wrap;
}


body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	padding: 10px;
	text-align: center;
}

nav {
	background-color: black;
	padding: 10px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: grid;
	grid-template-columns: repeat(4, 1fr);

}

nav li {
    align-items: center;
    text-align: center;
}

nav a {
	display: block;
	padding: 10px;
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	background-color: rgba(255, 0, 0, 0.689) ;
}

.box {
  width: 23%;
  padding: 10px;
}

img {
  float: left;
  width: 100px;
  height: 100px;
  margin-right: 10px;
}

.text {
  overflow: hidden;
  padding: 20px;
}

h2 {
  font-size: 1.2em;
  margin-top: 0;
}

p {
  margin-bottom: 0;
}


</style>    
</body>
</html>
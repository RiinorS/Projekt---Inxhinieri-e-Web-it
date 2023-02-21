<!DOCTYPE html>
<html>
<head>
	<title>Orders Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		h1 {
			margin-top: 0;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
		}
		.order-item {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 20px;
		}
		.order-item h2 {
			margin-top: 0;
			margin-bottom: 10px;
		}
		.order-item ul {
			list-style-type: none;
			padding: 0;
			margin: 0;
		}
		.order-item ul li {
			margin-bottom: 5px;
		}
		.order-item .order-date {
			font-style: italic;
			margin-bottom: 10px;
		}
		.order-item .order-total {
			font-size: 24px;
			font-weight: bold;
			color: green;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Orders</h1>
		<div class="order-item">
			<h2>Order #12345</h2>
			<p class="order-date">Ordered on: January 1, 2023</p>
			<ul>
				<li>Product 1</li>
				<li>Product 2</li>
				<li>Product 3</li>
			</ul>
			<div class="order-total">$199.99</div>
		</div>
		<div class="order-item">
			<h2>Order #67890</h2>
			<p class="order-date">Ordered on: February 15, 2023</p>
			<ul>
				<li>Product 4</li>
				<li>Product 5</li>
			</ul>
			<div class="order-total">$149.99</div>
		</div>
	</div>
</body>
</html>

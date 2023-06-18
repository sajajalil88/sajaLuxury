<?php 
require_once "connection.php";


session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');

};


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Noto+Serif+JP:wght@500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/89e6398017.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Home.css">
</head>
<style>
  .tab{
    display: none;
  }
    
		body {
			font-family: Santral W01;
			margin: 0;
			padding: 0;
			
		}

		h1 {
			text-align: center;
			margin-top: 20px;
		}

		table {
  font-family: Sandral W10;
  margin-top: 6%;
  border-collapse: collapse;
  margin-left: 20%;
  width: 60%;
   margin-left:3%;
 
 }
th,
td {
	font-size:17px;
  padding: 30px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
.quantity-input {
  width: 50px;

}
th {
  width: 900px;
  margin-left: -300px;
  margin-bottom:-20%;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

button {
  background-color: red;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 2px;
  cursor: pointer;
  width: 100;
}

button:hover {
  background-color: red;
  opacity: 0.7;
}

.total {
  text-align: right;
  font-weight: bold;
}

.cart-header th {
  margin-left: 500px;
}

input {
  width: 30%;
}

.checkout-div .checkout-btn a{
  color: black;
  text-decoration: none;
}

.checkout-div .checkout-btn a:hover {
  color: white;
}

@media (max-width: 768px) {
  table {
    font-size: 14px;
    width: 40%;
    max-width: 100%;
    margin-left: 0;
  }

  button {
    width: 100%;
  }

  input {
    width: 100%;
  }

  th {
    width: auto;
    margin-left: 0;
  }

  th,
  td {
    padding: 5px;
  }
  .checkout-div button {
    font-size: 10px;
	width: 50%;
	margin-left:10%
  }
  th,
td {
	font-size:14px;
  padding: 30px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

}

@media (max-width: 480px) {
  table {
    font-size: 12px;
  }

  .checkout-div button {
    font-size: 12px;
	width: 60%;
	margin-left:10%
  }
}
@media (min-width:800) and (max-width:1000px){
	.checkout-div button {
    font-size: 15px;
	width: 100%;
	margin-left:10%;
	background-color:red;
  }
}

td a {
  display: flex;
  align-items: center;
  margin-left:5%;
}
.div-check{
  float: right; background-color: #f5f5f5; padding: 30px; margin-top:-10%; 
  width:30%; 
  
  margin-right:3%;
  justify-content:center;	font-family: Santral W01;
  display:none;
}
.checkout-btn{
	
    background-color: #000;
    width: 85%;
    border: 1px solid #000;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    font-family: Santral W01;
    margin-top: 20%;
	margin-left:8%;
}
.checkout-btn:hover{
	background-color: #fff;
    color: #000;
}

.div-check {
  float: right;
  background-color: #f5f5f5;
  padding: 30px;
  margin-top: 1%;
  width: 30%;
  margin-right: 3%;
  justify-content: center;
  font-family: Santral W01;
  display: none;
  margin-bottom:40px;
}

.checkout-btn {
  background-color: #000;
  width: 85%;
  border: 1px solid #000;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  font-family: Santral W01;
  margin-top: 20%;
  margin-left: 8%;
}

.checkout-btn:hover {
  background-color: #fff;
  color: #000;
}

@media screen and (max-width: 768px) {
  .div-check {
    width: 80%;
    margin-right: 20px;
    margin-top: 50px;
    margin-bottom:5%;
  }
  
  .checkout-btn {
    margin-left: auto;
    margin-right: auto;
  }
  th,
td {
	font-size:14px;
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  margin-left:0;
}
table{
    margin-left:-2%;
    width:60%;
  }
}
@media screen and (min-width: 768px) and (max-width: 1000px) {
  .div-check {
    width: 60%;
    margin-right: 20%;
    margin-top: 40px;
    margin-bottom:5%;
  }
  
  .checkout-btn {
    margin-left: auto;
    margin-right: auto;
   
  }
  table{
    margin-left:15%;
    width:60%;
  }
  th,
td {
	font-size:16px;
  padding: 20px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  margin-left:0;

}

}
@media screen and (min-width: 900px) and (max-width: 1100px) {
  .div-check {
  float: right;
  background-color: #f5f5f5;
  padding: 20px;
  margin-top: -1%;
  width: 30%;
  margin-right: 3%;
  justify-content: center;
  font-family: Santral W01;
  display: none;
}

.checkout-btn {
  background-color: #000;
  width: 85%;
  border: 1px solid #000;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 15px;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  font-family: Santral W01;
  margin-top: 0%;
  margin-left: 8%;
}

.checkout-btn:hover {
  background-color: #fff;
  color: #000;
}
table{
    margin-left:5%;
    width:60%;
  }
  th,
td {
	font-size:17px;
  padding: 17px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  margin-left:0;
}
}
.no{
  display:none;
  justify-content:center;
  font-size:25px;
  margin-top:10%;
  margin-left:45%;
  font-family:Sandral w01;
}

</style>
<body>

	<?php include "Header.php" ?>   
 

  <p class='no'>No item added</p>
	<form id="cart-form" method="POST" class='tab'>
	<table>
		<tr style=' width: 100%; margin-left: 100%; border-bottom: 1px solid #ddd; font-weight: bold' class="cart-header">
			<th>Product Image</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Sub Total</th>
		</tr>
	
		<!-- Display cart items -->
		<script>
			var cartItems = JSON.parse(localStorage.getItem("cart")) || [];
			var totalPrice = 0;
			for (var i = 0; i < cartItems.length; i++) {
				var item = cartItems[i];
				var quantity = item.quantity || 1;
				var subTotal = item.price * quantity;
	
				document.write("<tr>");
				document.write("<td><img src='" + item.image + "' alt='" + item.name + "' width='100' height='100' name='image'></td>");
				document.write("<td  name='name'>  " + item.name + "</td>");
				document.write("<td name='price'>$" + item.price + "</td>");
        document.write("<td><input type='number' id='quantity" + i + "' name='quantity' value='" + quantity + "' min='0' max='5' onchange='updateQuantity(" + i + ")' class='quantity-input'></td>");
				document.write("<td>$<span id='subTotal" + i + "'>" + subTotal.toFixed(2) + "</span></td>");
				//document.write("<td><button onclick='removeItem(" + i + ")'>Delete</button></td>");
				document.write("<td class='cart-item-remove'><a onclick='removeItem(" + i + ")'><i class='fa fa-trash-o' aria-hidden='true'></i></a></td>");
				document.write("</tr>");
				totalPrice += subTotal;
			}




	document.write("<div  class='div-check'> <h2  style='font-size:20px;'=>Order Summary</h2><hr><p><span style='font-weight:bold; font-size:17px;'>Total: </span><span id='totalPrice' style='margin-left:70%;'>" +'$' +totalPrice.toFixed(2) + "</span><p style='font-size:15px;'>(Price include TVA)</p> </p><hr> <p>Order with free delivery</p><p>Three days order Arrival</p><p>Three days return</p><button class='checkout-btn'>Proceed to Checkout</button></div>");

if(totalPrice != 0) {
  var divCheck = document.querySelector('.div-check');
  divCheck.style.display = 'block';

  var tab = document.querySelector('.tab');
  tab.style.display = 'block';
}else{
  var tab = document.querySelector('.tab');
  tab.style.display = 'none';

  var tabp = document.querySelector('.no');
  tabp.style.display = 'block';
}



	
			
			function removeItem(index) {
				var cartItems = JSON.parse(localStorage.getItem("cart")) || [];
	
				cartItems.splice(index, 1);
				localStorage.setItem("cart", JSON.stringify(cartItems));
	
				location.reload();
			}
	
			function updateQuantity(index) {
    var cartItems = JSON.parse(localStorage.getItem("cart")) || [];
    var quantity = document.getElementById("quantity" + index).value;
    var item = cartItems[index];

    item.quantity = quantity;
    item.total = quantity * item.price;

    localStorage.setItem("cart", JSON.stringify(cartItems));

    // Update the total price
    updateTotalPrice();

    // Update the sub-total price for the current item
    subPrice(index);
}


function updateTotalPrice() {
				var cartItems = JSON.parse(localStorage.getItem("cart")) || [];
				var totalPrice = 0;
				for (var i = 0; i < cartItems.length; i++) {
					var item = cartItems[i];
					var quantity = item.quantity || 1;
	
					totalPrice += item.price * quantity;
				}}
				function subPrice() {
    var cartItems = JSON.parse(localStorage.getItem("cart")) || [];
    var totalPrice = 0;
    for (var i = 0; i < cartItems.length; i++) {
        var item = cartItems[i];
        var quantity = item.quantity || 1;
        var subTotal = item.price * quantity;

        // Update the sub-total displayed on the page
        document.getElementById("subTotal" + i).innerHTML = subTotal.toFixed(2);

        totalPrice += subTotal;
    }

    // Update the total price displayed on the page
    document.getElementById("totalPrice").innerHTML = totalPrice.toFixed(2);
}

		</script>
	</table>

	
		</form>
	

</body>



<footer class="footer-distributed" style='margin-top:15%;'>
	<hr>
	  <div class="footer-left">
		<h3>Saja<span>Luxury</span></h3>
	
		<p class="footer-links">
		  <a href="#">Home</a>
		  |
		  <a href="#">About</a>
		  |
		  <a href="#">Contact</a>
		</p>
	
		<p class="footer-company-name">© 2019 Saja Luxury Pvt. Ltd.</p>
	  </div>
	
	  <div class="footer-center">
		<div>
		  <i class="fa fa-map-marker" aria-hidden="true"></i>
			<p><span>309 - luxa Solitaire,
			 Bldg. No. A - 3, Sector - 1</span>
			badaro, Beirut-lebanon - 200820</p>
		</div>
	
		<div>
    <i class="fa fa-phone" aria-hidden="true"></i>
		  <p>+961 01-654-981</p>
		</div>
		<div>
		  <i class="fa fa-envelope" aria-hidden="true"></i>
		  <p><a href="mailto:support@eduonix.com">support@sajaLuxury.com</a></p>
		</div>
	  </div>
	
	  <div class="footer-right">
		<p class="footer-company-about">
		  <span>About Saja Luxury</span>
		  We sell high qualities of diamond, gold and silver that suits ever person own beauty.Be uique. Wear our's</p>
		<div class="footer-icons">
		  <a href="#"><i class="fa fa-facebook"></i></a>
		  <a href="#"><i class="fa fa-twitter"></i></a>
		  <a href="#"><i class="fa fa-instagram"></i></a>
		</div>
	  </div>
  
	</footer>

</html>

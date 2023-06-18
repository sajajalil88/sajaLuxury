<?php 
require_once "connection.php";
session_start();
$user_id = $_SESSION['user_id'];

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
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
<style>
   .pro-section {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40vh;
}

.profile {
  margin-top: 10%;
  width: 40%;
  border: 1px solid #000;
  padding: 40px;
  text-align: center;
}

.profile a {
  text-decoration: none;
  color: #000;
  width: 80%;
  margin-left: 12%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.profile p {
  font-family: Santral W01;
  margin-bottom: 40px;
  font-size: 24px;
  font-weight: bold;
}

.delete-btn a {
  text-decoration: none;
  color: #000;
  width: 80%;
  margin-left: 12%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.delete-btn {
  background-color: #ffffff;
  width: 70%;
  background: transparent;
  padding: 8px;
  border: 1px solid black;
  text-decoration: none;
  border-radius: 2px;
  font-size: 16px;
  color: black;
  font-family: Santral W01;
}

.delete-btn:hover {
  background-color: #Ff0000;
  color: white;
  opacity: 0.8;
}

.flex-btn {
  padding: 5px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-top: 10px;
}

.option-btn {
  background-color: #ffffff;
  width: 70%;
  background: transparent;
  padding: 8px;
  border: 1px solid black;
  border-radius: 2px;
  font-size: 16px;
  color: black;
  font-family: Santral W01;
}

.option-btn:hover {
  background-color: #000;
  color: white;
}

.option-btn2 {
  background-color: #ffffff;
  width: 70%;
  background: transparent;
  padding: 8px;
  border: 1px solid black;
  border-radius: 2px;
  font-size: 16px;
  color: black;
  font-family: Santral W01;
}

.option-btn2:hover {
  background-color: #000;
  color: white;
}

.flex-btn .option-btn a {
  text-decoration: none;
  color: #000;
  width: 80%;
  margin-left: 12%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.flex-btn a {
  text-decoration: none;
  color: #000;
  width: 80%;
  margin-top: 5%;
  margin-left: 12%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Media Queries */

@media screen and (max-width: 768px) {
  .pro-section {
    height: auto;
    padding: 20px ;
	margin-bottom:-15%;
	margin-top:20%;
  }
  
  .profile {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
  }
  
  .profile a {
    width: 100%;
    margin-left: 0;
    margin-top: 10px;
  }
  
  .delete-btn a {
    width: 100%;
    margin-left: 0;
    margin-top: 10px;
  }

}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
	overflow-x: hidden;
}
*{
	margin:0;
	box-sizing: border-box;
}
:before,:after{
	box-sizing: border-box;
}
.container{
	max-width: 1200px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.v-center{
	align-items: center;
}
ul{
	list-style: none;
	margin:0;
	padding:0;
}
a{
	text-decoration: none;
}
/* header */
.header{
  text-transform:uppercase;
  font-family: Santral W01;
	display: block;
	width: 100%;
	position: relative;
	z-index: 99;	padding:8px;
margin-top:-1%;
}
.header .item-left{
	
	flex:0 0 17%;
}
.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:-10%;
	margin-top:3%;
}
.header .logo span{
color:#81d8d0;
}
.header .item-center{
	flex:0 0 66%;
	
}
.header .menu-main{
  text-transform:uppercase;
}
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
  margin-top:-3%;
}
.menu-main {
  margin-top:2%;
  margin-left:20%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#333;
     display: inline-block;
     margin-left: 14px;
     transition: color 0.3s ease;
	 float:right;
}
.header .menu > ul > li{
	display: inline-block;
	line-height: 50px;
	margin-left: 25px;
}
.header .menu > ul > li > a{
	font-size: 16px;
	font-weight: 500;
	color:#000000;
	position: relative;
	text-transform: uppercase;
	transition: color 0.3s ease;
}
.header .menu > ul > li .sub-menu{
	position: absolute;
	z-index: 500;
	background-color:#ffffff;
	box-shadow: -2px 2px 70px -25px rgba(0,0,0,0.3); 
	padding: 20px 30px;
	transition: all 0.5s ease;
	margin-top:25px;
	opacity:0;
	visibility: hidden;
}

@media(min-width: 992px){
.header .menu > ul > li.menu-item-has-children:hover .sub-menu{
	margin-top: 0;
	visibility: visible;
	opacity: 1;
}
}
.header .menu > ul > li .sub-menu > ul > li{
	line-height: 1;
}
.header .menu > ul > li .sub-menu > ul > li > a{
	display: inline-block;
	padding: 10px 0;
	font-size: 16px;
	color: #000;
	transition: color 0.3s ease;
	text-decoration: none;
	text-transform: capitalize;
}
.header .menu > ul > li .sub-menu > ul > li > a:hover{

}
.header .menu > ul > li .single-column-menu{
	min-width: 280px;
	max-width: 350px;
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li{
   line-height: 1;
   display: block; 
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a {
	padding:10px 0;
	display: inline-block;
	font-size: 15px;
	color:#555555;
	transition: color 0.3s ease;
}
.list-item .text-center a{
	font-size:25px;
}
.header .menu > ul > li .sub-menu.mega-menu{ 
    left: 50%;
    transform: translateX(-50%);	
}

.header .menu > ul > li .sub-menu.mega-menu-column-4{
  max-width: 1100px;
  width: 100%; 	
  display: flex;
  flex-wrap: wrap;
  padding:20px 15px;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
  flex:0 0 25%;
  padding:0 15px;
  font-size: 14px;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item .title{
	font-size: 14px;
	color:#000;
	font-weight: 500;
	line-height: 1;
	padding:10px 0;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item .title:hover{
	font-size: 16px;
	color:#000;
	font-weight: 500;
	line-height: 1;
	padding:10px 0;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
	text-align: center;
}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
	max-width: 100%;
	width: 100%;
	vertical-align: middle;
	margin-top: 10px;
}
.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a:hover,
.header .menu > ul > li .sub-menu > ul > li > a:hover,
.header .item-right a:hover,
.header .menu > ul > li:hover > a{
	color:#333;
}
/* banner section */

.mobile-menu-head,
.mobile-menu-trigger{
	display: none;
}

/*responsive*/
@media(max-width: 991px){

	.header .item-center{
		order:3;
		flex:0 0 100%;
	}
	.header .item-left,
	.header .item-right{
		flex:0 0 auto;
	}
	.v-center{
		justify-content: space-between;
	}
	.header .mobile-menu-trigger{
		display: flex;
		height: 30px;
		width: 30px;
		margin-left: 15px;
		cursor: pointer;
		align-items: center;
		justify-content: center;
	}
	.header .mobile-menu-trigger span{
		display: block;
		height: 2px;
		background-color: #333333;
		width: 24px;
		position: relative;
	}
	.header .mobile-menu-trigger span:before,
	.header .mobile-menu-trigger span:after{
		content: '';
		position: absolute;
		left:0;
		width: 100%;
		height: 100%;
		background-color: #333333;
	}
	.header .mobile-menu-trigger span:before{
		top:-6px;
	}
	.header .mobile-menu-trigger span:after{
		top:6px;
	}
	.header .item-right{
		align-items: center;
	}

	.header .menu{
		position: fixed;
		width: 320px;
		background-color:#ffffff;
		left:0;
		top:0;
		height: 100%;
		overflow: hidden;
		transform: translate(-100%);
		transition: all 0.5s ease;
		z-index: 1099;
	}
	.header .menu.active{
	   transform: translate(0%);	
	}
	.header .menu > ul > li{
		line-height: 1;
		margin:0;
		display: block;
	}
	.header .menu > ul > li > a{
		line-height: 50px;
		height: 50px;
		padding:0 50px 0 15px;
		display: block;
		border-bottom: 1px solid rgba(0,0,0,0.1);
	}
	.header .menu > ul > li > a i{
		position: absolute;
		height: 50px;
		width: 50px;
		top:0;
		right: 0;
		text-align: center;
		line-height: 50px;
		transform: rotate(-90deg);
	}
	.header .menu .mobile-menu-head{
		display: flex;
		height: 50px;
		border-bottom: 1px solid rgba(0,0,0,0.1);
		justify-content: space-between;
		align-items: center;
		position: relative;
		z-index: 501;
		position: sticky;
		background-color: #ffffff;
		top:0;
	}
	.header .menu .mobile-menu-head .go-back{
		height: 50px;
		width: 50px;
		border-right: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;
		font-size: 16px;
		display: none;
	}
	.header .menu .mobile-menu-head.active .go-back{
		display: block;
	}
	.header .menu .mobile-menu-head .current-menu-title{
		font-size: 15px;
		font-weight: 500;
		color:#000000;
	}
	.header .menu .mobile-menu-head .mobile-menu-close{
	    height: 50px;
		width: 50px;
		border-left: 1px solid rgba(0,0,0,0.1);
		cursor: pointer;
		line-height: 50px;
		text-align: center;
		color:#000000;	
		font-size: 25px;
	}
	.header .menu .menu-main{
		height: 100%;
		overflow-x: hidden;
		overflow-y: auto;
	}
	.header .menu > ul > li .sub-menu.mega-menu,
	.header .menu > ul > li .sub-menu{
		visibility: visible;
		opacity: 1;
		position: absolute;
		box-shadow: none;
		margin:0;
		padding:15px;
		top:0;
		left:0;
		width: 100%;
		height: 100%;
		padding-top: 65px;
		max-width: none;
		min-width: auto;
		display: none;
		transform: translateX(0%);
		overflow-y: auto;
	}
.header .menu > ul > li .sub-menu.active{
	display: block;
}
@keyframes slideLeft{
	0%{
		opacity:0;
		transform: translateX(100%);
	}
	100%{
	    opacity:1;
		transform: translateX(0%);	
	}
}
@keyframes slideRight{
	0%{
		opacity:1;
		transform: translateX(0%);
	}
	100%{
	    opacity:0;
		transform: translateX(100%);	
	}
}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img{
		margin-top:0;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center .title{
		margin-bottom: 20px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item.text-center:last-child .title{
		margin-bottom:0px;
	}
	.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item{
		flex: 0 0 100%;
        padding: 0px;
	}
	.header .menu > ul > li .sub-menu > ul > li > a,
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a{
		display: block;
	}
	.header .menu > ul > li .sub-menu.mega-menu > .list-item > ul {
		margin-bottom: 15px;
	}
	.menu-overlay{
		position: fixed;
		background-color: rgba(0,0,0,0.5);
		left:0;
		top:0;
		width: 100%;
		height: 100%;
		z-index: 1098;
		visibility: hidden;
		opacity:0;
		transition: all 0.5s ease;
	}
	.menu-overlay.active{
	  visibility: visible;
	  opacity:1;	
	}
}

@media (max-width:700px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:60%;
  margin-top:-5%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 14px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logo a{
	font-size: 23px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:1%;
	margin-top:8%;
}
.profile-section{
	margin-bottom:-100%;
}
}
@media (min-width:900px) and (max-width:1000px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:80%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:1%;
}

}
@media (min-width:700px) and (max-width:900px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:80%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:1%;
}
.menu-main .text-center{
	margin-left:20%;
}

}

@media (min-width:1000px) and (max-width:1000px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:80%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:1%;
}
}
@media (min-width:1100px)  and (max-width:1400px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:80%;
	margin-top:-5%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:-40px
	width:100%;
}

.menu-main{
width:800px;
margin-left:-1%;
}
}










    

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }

}


.footer-distributed{
	background-color: #fff;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font-size: 16px;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
	font-family:Sandral W01;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #000;
	font-size: 30;
  font-family: Santral W01;
	margin: 0;
}

/* The company logo */

.footer-distributed h3 span{
	color:  #81d8d0;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #000;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #000;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	
	color: #000;
	font-size: 20px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}
.footer-distributed .footer-center i:hover{
  transition: all 0.3s ease-in-out;
  transform: scale(1.5);
}
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #000;
	vertical-align: middle;
	margin:0;
  font-size: 16px;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:16px;

}

.footer-distributed .footer-center p a{
	color:  #000;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}
hr{
  color: #81d8d0;
}
.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #000;
	font-size: 15px;
	font-weight: normal;
	margin: 0;
  font-family: Santral W01;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #000;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
  font-family: Santral W01;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	border-radius: 2px;

	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}
.footer-distributed .footer-icons a :hover{
  transition: all 0.3s ease-in-out;
  transform: scale(1.5);
  }
/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
}
    </style>
</head>
<body>
<header class="header">
 	<div class="container">
 		<div class="row v-center">
 			<div class="header-item item-left">
 				<div class="logo">
 					<a href="Home.php">Saja<span>Luxury<span></a>
 				</div>
 			</div>
 			<!-- menu start here -->
 			<div class="header-item item-center">
 				<div class="menu-overlay">
 				</div>
 				<nav class="menu">
 					<div class="mobile-menu-head">
 						<div class="go-back"><i class="fa fa-angle-left"></i></div>
 						<div class="current-menu-title"></div>
 						<div class="mobile-menu-close">&times;</div>
 					</div>
 					<ul class="menu-main">
 						<li>
 							<a href="Home.php">Home</a>
 						</li>
 						<li class="menu-item-has-children">
 							<a href="#">Jewerly <i class="fa fa-angle-down"></i></a>
 							<div class="sub-menu mega-menu mega-menu-column-4">
 								<div class="list-item text-center">
 									<a href="Necklaces.php">
 									
 									<h4 class="title">Necklaces</h4>
 									</a>
 								</div>
 								<div class="list-item text-center">
 									<a href="Bracelets.php">
 									
 									<h4 class="title">Bracelets</h4>
 									</a>
 								</div>
 								<div class="list-item text-center">
 									<a href="Rings.php">
 									
 									<h4 class="title">Rings </h4>
 									</a>
 								</div>
 								<div class="list-item text-center">
 									<a href="Engagement.php">
 									
 									<h4 class="title">Engagement</h4>
 								   </a>
 								</div>

								 <div class="list-item text-center">
 									<a href="Earings.php">
 									
 									<h4 class="title">Earings</h4>
 								   </a>
 								</div>
								 <div class="list-item text-center">
 									<a href="#">
 									
 									<h4 class="title">Watches</h4>
 								   </a>
 								</div>
 							</div>
 						</li>
 						<li>
 							<a href="Gift.php">Gifts </a>
 						</li>
 						<li class="menu-item-has-children">
 							<a href="About.php">About us </a>
 							
 						</li>
 						<li>
 							<a href="Contact.php">Contact Us</a>
 						</li>
 					</ul>
 				</nav>
 			</div>
 			<!-- menu end here -->
 			<div class="header-item item-right">
 				<a href="Profile.php"><i class="fa fa-user-o" aria-hidden="true"></i></a>
 				<a href="#"><i class="far fa-heart"></i></a>
 				<a href="Cart.php"><i class="fas fa-shopping-cart"></i></a>
 				<!-- mobile menu trigger -->
 				<div class="mobile-menu-trigger">
 					<span></span>
 				</div>
 			</div>
 		</div>
 	</div>
 </header>
<section class="pro-section">
<div class="profile">
         <?php
            $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select_user) > 0){
               $fetch_user = mysqli_fetch_assoc($select_user);
            };
         ?>
         <p><?= $fetch_user['name']; ?></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="Login.php" class="option-btn2">login</a>
            <a href="Register.php" class="option-btn">register</a>
         </div>
      </div>
        </section>
        
     <footer class="footer-distributed">
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
</body>
</html>
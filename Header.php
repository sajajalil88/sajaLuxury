<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
	<link
    href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity=
    "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous"/>
        
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Noto+Serif+JP:wght@500;600;700;900&display=swap"
            rel="stylesheet">
    <link
    href=
    "https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
    rel="stylesheet"
  />
  <script src="https://kit.fontawesome.com/89e6398017.js" crossorigin="anonymous"></script>
<style>
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
	display: block;
	width: 100%;
	position: relative;
	z-index: 99;
	padding:8px;

}
.header .item-left{
	
	flex:0 0 17%;
}
.header .logo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:-80%;
}
.header .logo span{
color:#81d8d0;
}
.header .item-center{
	flex:0 0 66%;
	
}
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:100%;
}
.header .item-right a{ 
     text-decoration: none;
     font-size: 18px;
     color:#333;
     display: inline-block;
     margin-left: 16px;
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
	text-transform: capitalize;
	transition: color 0.3s ease;
	text-transform:uppercase;
	
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
.header .menu-main{
	width:700px
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
	font-size: 15px;
	color: #000;
	transition: color 0.3s ease;
	text-decoration: none;
	text-transform:uppercase;
	
}
.header .menu > ul > li .sub-menu > ul > li > a:hover{
	
	font-size: 16px;
	
	
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
	font-size:20px;
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
}
}
@media (min-width:900px) and (max-width:1000px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:70%;
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
@media (min-width:700px) and (max-width:800px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:550px;
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
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:5%;
}
.menu-main .text-center{
	margin-left:20%;
}

}
@media (min-width:800px) and (max-width:900px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:600px;
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
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:5%;
}
.menu-main .text-center{
	margin-left:20%;
}

}



@media (min-width:900px) and (max-width:1000px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:780px;
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
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:5%;
}
.menu-main .text-center{
	margin-left:20%;
}

}


@media (min-width:1000px) and (max-width:1100px)
{
	
.header .item-right{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:83%;
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
	margin-left:86%;
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
	margin-left:-20px;
	width:100%;
}
.header .logo span{
	color:#81d8d0;
}
}


</style>
</head>
<body>
 
 <!-- header start -->
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
 							<a href="About.php">About us</a>
 							
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
 <!-- header end -->

<script >

const menu = document.querySelector(".menu");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 menuMain.addEventListener("click", (e) =>{
 	if(!menu.classList.contains("active")){
 		return;
 	}
   if(e.target.closest(".menu-item-has-children")){
   	 const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
   }
 });
 goBack.addEventListener("click",() =>{
 	 hideSubMenu();
 })
 menuTrigger.addEventListener("click",() =>{
 	 toggleMenu();
 })
 closeMenu.addEventListener("click",() =>{
 	 toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click",() =>{
 	toggleMenu();
 })
 function toggleMenu(){
 	menu.classList.toggle("active");
 	document.querySelector(".menu-overlay").classList.toggle("active");
 }
 function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
 }

 function  hideSubMenu(){  
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() =>{
       subMenu.classList.remove("active");	
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
 }
 
 window.onresize = function(){
 	if(this.innerWidth >991){
 		if(menu.classList.contains("active")){
 			toggleMenu();
 		}

 	}
 }



 window.addEventListener("load", () => {
    autoSlide();
 })
 
 function autoSlide() {
    setInterval(() => {
       slide(getItemActiveIndex() + 1);
    }, 3000); // slide speed = 3s
 }
 
 function slide(toIndex) {
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(".carousel_item__active");
 
    // check if toIndex exceeds the number of carousel items
    if (toIndex >= itemsArray.length) {
       toIndex = 0;
    }
 
    const newItemActive = itemsArray[toIndex];
 
    // start transition
    newItemActive.classList.add("carousel_item__pos_next");
    setTimeout(() => {
       newItemActive.classList.add("carousel_item__next");
       itemActive.classList.add("carousel_item__next");
    }, 20);
 
    // remove all transition class and switch active class
    newItemActive.addEventListener("transitionend", () => {
       itemActive.className = "carousel_item";
       newItemActive.className = "carousel_item carousel_item__active";
    }, {
       once: true
    });
 }
 
 function getItemActiveIndex() {
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(".carousel_item__active");
    const itemActiveIndex = itemsArray.indexOf(itemActive);
    return itemActiveIndex;
 }

 //////////////////////////////////////////////

 function reveal() {
   var reveals = document.querySelectorAll(".pearl-banner");
 
   for (var i = 0; i < reveals.length; i++) {
     var windowHeight = window.innerHeight;

     //get boundingclientRect :  calculates the distance from the
     // top of the element to the top of the viewport
     var elementTop = reveals[i].getBoundingClientRect().top;
     var elementVisible = 150;
     //threshold value of 150 pixels for the amount of the element that needs 
     //to be visible in the viewport before it is revealed.
 
     if (elementTop < windowHeight - elementVisible) {
       reveals[i].classList.add("active");
     } else {
       reveals[i].classList.remove("active");
     }
   }

   var appears = document.querySelectorAll(".news-section");

   for (var i = 0; i < appears.length; i++) {
     var windowHeight = window.innerHeight;
 
     //get boundingclientRect :  calculates the distance from the
     // top of the element to the top of the viewport
     var elementTop = appears[i].getBoundingClientRect().top;
     var elementVisible = 150;
     //threshold value of 150 pixels for the amount of the element that needs 
     //to be visible in the viewport before it is revealed.
 
     if (elementTop < windowHeight - elementVisible) {
       appears[i].classList.add("active");
     } else {
       appears[i].classList.remove("active");
     }
   }

 }
 
 window.addEventListener("scroll", reveal);

 ///////////////////////////////////////////





/////////////////////////////////////////////////

function love() {
   var reveals = document.querySelectorAll(".love-banner");
 
   for (var i = 0; i < reveals.length; i++) {
     var windowHeight = window.innerHeight;

     //get boundingclientRect :  calculates the distance from the
     // top of the element to the top of the viewport
     var elementTop = reveals[i].getBoundingClientRect().top;
     var elementVisible = 150;
     //threshold value of 150 pixels for the amount of the element that needs 
     //to be visible in the viewport before it is revealed.
 
     if (elementTop < windowHeight - elementVisible) {
       reveals[i].classList.add("active");
     } else {
       reveals[i].classList.remove("active");
     }
   }

   
 }

 
 window.addEventListener("scroll", love);
 ///////////////////////////////////

let arrival = document.querySelectorAll(".carousel");
   arrival.owlCarousel({
           margin: 1500,
           loop: true,
           autoplay: false,
           autoplayTimeout: 10000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
             items:2,
            nav: false
            },
           1000:{
           items:3,
           nav: false
             }
       }
         });

////////////////////////////////////////////////////////////

</script>
</body>
</html>







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



        const arrows_slider= document.querySelectorAll(".fa-arrow-circle-o-right");
        const container_slider= document.querySelectorAll(".mostly-liked");

        arrows_slider.forEach((arrow, i) => {
            const ItemNo = container_slider[i].querySelectorAll(".img-normal").length;
            let clickitem = 0;
            arrow.addEventListener("click", () => {
                clickitem++;
                if(ItemNo - (5 + clickitem) >= 0){
                  container_slider[i].style.transform = `translateX(${
                    container_slider[i].computedStyleMap().get("transform")[0].x.value
                        - 500}px)`;
                }else{
                  container_slider[i].style.transform = "translateX(0)";
                    clickitem = 0;
                }
            });
        });
/////////////////////////////////////////////////







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
 /////////////////////////////////////



 function viewProduct(productId) {
    
  const productElement = document.getElementById(productId);
  const productImageSrc1 = productElement.querySelector('#image1').getAttribute('src');
  const productImageSrc2 = productElement.querySelector('#image2').getAttribute('src');
  const productImageSrc3 = productElement.querySelector('#image3').getAttribute('src');
  const productImageSrc4 = productElement.querySelector('#image4').getAttribute('src');
  const productName = productElement.querySelector('.p-name').textContent;
  const productPrice = productElement.querySelector('.p-price').textContent;
  const priceCart = productElement.querySelector('.p-price').textContent.replace("$","");
  var lebanese = priceCart * 100000;
  const productPage = `
   

  
  <style>
  
  .header .container{
max-width: 1000px;
height:50%;
top:0;
}
.header .container .row{
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
display: block;
width: 100%;
position: relative;
z-index: 99;
top:0;

}
.header .item-left{
flex:0 0 17%;
}
.header .logo a{
text-transform:uppercase;
font-size: 29px;
color:#000000;
font-weight: 500;
text-decoration: none;
margin-left: -250px;
}
.header .logo span{
color:#81d8d0;
}
.header .item-center{
flex:0 0 66%;

}
.header .item-right{
margin-top:-50px;
display: flex;
justify-content: flex-end;
float: right;
margin-left: 10%;
}
.header .item-right a{ 
   text-decoration: none;
   font-size: 18px;
   color:#333;
   display: inline-block;
   margin-left: 15px;
   transition: color 0.3s ease;}
  
.header .menu > ul > li{
display: inline-block;
line-height: 50px;
margin-left: 25px;
}
.header .menu > ul > li > a{
font-size: 18px;
font-weight: 500;
color:#000000;
position: relative;
text-transform:uppercase;
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
.main-menu{
text-transform:uppercase;

}
.header .item-center{
margin-top: -5%;
margin-left:7%;
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
text-transform: capitalize;
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
font-size: 18px;
color:#000;
transition: color 0.3s ease;
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
font-size: 16px;
color:#000;
font-weight: 500;
line-height: 1;
padding:7px 0;
cursor: pointer;

}
.menu-main {
width: 800px;
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
color:#000;
cursor: pointer;
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
@media (max-width:600px)
{
.header{

margin-top:-20%;
margin-bottom:-30%;
}
.header .item-center{
  flex:0 0 40%;
  margin-left: 100%;
}
.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:60%;
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
font-size: 28px;
color:#000;
font-weight: 700;
text-decoration: none;
margin-left:-15%;
}

.col-item .content{
width:300px;
margin-left:10%;
}
}

@media (min-width:600px) and (max-width:700px)
{

.header{

margin-top:-10%;
margin-bottom:-30%;
}
.header .item-center{
  flex:0 0 40%;
  margin-left: 100%;
}
.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:60%;
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
font-size: 28px;
color:$000;
font-weight: 700;
text-decoration: none;
margin-left:-15%;
}

.col-item .content{
width:440px;
margin-left:10%;
}
}

@media (min-width:700px) and (max-width:770px)
{

.header{

margin-top:-10%;
margin-bottom:-30%;
}
.header .item-center{
  flex:0 0 40%;
  margin-left: 100%;
}
.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:60%;
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
font-size: 28px;
color:#000;
font-weight: 700;
text-decoration: none;
margin-left:-15%;
}

.col-item .content{
width:440px;
margin-left:18%;
}
}@media (min-width:770px) and (max-width:880px)
{

.header{

margin-top:-2%;
margin-bottom:5%;
}
.header .item-center{
  flex:0 0 40%;
  margin-left: 100%;
}
.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:100%;
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
font-size: 28px;
color:#000;
font-weight: 700;
text-decoration: none;
margin-left:-55%;
}

.col-item .content{
width:450px;
margin-left:15%;
}
}

@media (min-width:880px) and (max-width:999px)
{

.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:100%;
}
.header .item-right a{ 
   text-decoration: none;
   font-size: 16px;
   color:#555555;
   display: inline-block;
   margin-left: 10px;
   transition: color 0.3s ease;
 float:right;
}

.header .logo a{
font-size: 28px;
color:green;
font-weight: 700;
text-decoration: none;
margin-left:-60%;
}

.col-item .content{
width:450px;
margin-left:15%;
}
}
@media (min-width:1000px) and (max-width:1200px)
{

.header .item-right{
flex:0 0 17%;
display: flex;
justify-content: flex-end;
margin-left:75%;
}
.header .item-right a{ 
   text-decoration: none;
   font-size: 16px;
   color:#555555;
   display: inline-block;
   margin-left: 10px;
   transition: color 0.3s ease;
 float:right;
}
.header .logo{
width: 300px
}

.header .logo a{
font-size: 28px;
color:pink;
font-weight: 700;
text-decoration: none;
width: 100%;
margin-left: -55%;
}
.col-item .slider-items{
width:30%;
}

.col-item .content{
width:300px;

}
.menu-main {

margin-left: 2%;
margin-top: 0%;
}
}
@media (min-width:1100px)  and (max-width:1400px)
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
   color:#555555;
   display: inline-block;
   margin-left: 10px;
   transition: color 0.3s ease;
 float:right;
}
.header .logo{
width: 300px
}

.header .logo a{
font-size: 28px;
color:#000000;
font-weight: 700;
text-decoration: none;
width: 100%;
margin-left: -60%;
}
.menu-main {

margin-left: 5%;
margin-top: 0%;
}
}
  </style>
  <header class="header">
 <div class="container">
   <div class="row v-center">
     <div class="header-item item-left">
       <div class="logo">
         <a href="#">Saja <span>Luxury<span></a>
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
             <a href="#">Contact Us</a>
           </li>
           <li class="menu-item-has-children">
             <a href="#">Our Store <i class="fas fa-angle-down"></i></a>
             <div class="sub-menu single-column-menu">
               <ul>
                 <li><a href="visit.php">Visit Us</a></li>
                 <li><a href="#">Our Story</a></li>
                 
               </ul>
             </div>
           </li>
           <li>
             <a href="#">Contact Us</a>
           </li>
         </ul>
       </nav>
     </div>
     <!-- menu end here -->
     <div class="header-item item-right">
       <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a>
       <a href="#"><i class="far fa-heart"></i></a>
       <a href="#"><i class="fas fa-shopping-cart"></i></a>
       <!-- mobile menu trigger -->
       <div class="mobile-menu-trigger">
         <span></span>
       </div>
     </div>
   </div>
 </div>
</header>

<div class="hero">
      <div class="row-item">
          <div class="col-item">

              <div class="slider-items">
                  <div class="product-items">

                      <img src="${productImageSrc1}" alt="" onclick="clickme(this)">
                      <img src="${productImageSrc2}" alt="" onclick="clickme(this)">
                      <img src="${productImageSrc3}" alt="" onclick="clickme(this)">
                      <img src="${productImageSrc4}" alt="" onclick="clickme(this)">

                  </div>
                  <div class="preview">
                      <img src="${productImageSrc1}" id="imagebox" alt="">
                  </div>
              </div>

          </div>
          <div class="col-item">

              <div class="content">
                  <h3>${productName}</h3>
                  <p class="price-item">${productPrice} - or ${lebanese} L.L</p>
                  <hr>
                  <p> We sell high qualities of diamond, gold and silver that suits ever person own beauty.Be uique. Wear our'
                    We sell high qualities of diamond, gold and silver that suits ever person own beauty.Be uique. Wear our'
                    </p>
                 
              
                  <button type="button" class="button-item" id="shop" onclick="addToCart('${productName}', ${priceCart}, '${productImageSrc1}')"> <i class="fa fa-shopping-cart"></i>Add to cart</button>
                  <div id="popup">
                    Item Added to Cart
                  </div>
                  <div class="list-provide">
      
                        <p><i class="fa fa-truck" aria-hidden="true"></i>    Free shipping on order over $500</p>
                      <p><i class="fa fa-retweet" aria-hidden="true"></i>   Free 30 Day return after shipping</p>
                      <p><i class="fa fa-diamond" aria-hidden="true"></i>   Two years jewelery warranty</p>
                     
                    </div>
                    
              </div>

          </div>
      </div>

      <br><br><br>

      <h2 class="you-may-also-like" style=' display:flex; justify-content:center; font-size:25px;'>You May Also Like </h2>
    <div class="rings-shop">
      <div  class="product-details"  id="product-10">
          <div class="change-img-hover">
              <div class="img-normal">
                <img id="image1" src="images/ear10.jpg" alt="vision">
              </div>
              <div class="img-hover" onclick="viewProduct('product-10')">
                <img id="image2" src="images/earH10.jpg" alt="desk">
                <img id="image3" src="images/earH10view1.jpg" alt="desk">
                <img id="image4" src="images/earH10view2.jpg" alt="desk">
              </div>
            </div>
          <p class="p-name">Single Diamond Icicle Hoop</p>
          <div class="desc-price">
          <p class="p-description">14k Yellow Gold</p>
          <p class="p-price">$200</p>
          </div>
         
         </div>

         <div  class="product-details"  id="product-11">
          <div class="change-img-hover">
              <div class="img-normal">
                <img id="image1" src="images/ear11.jpg" alt="vision">
              </div>
              <div class="img-hover" onclick="viewProduct('product-11')">
                <img id="image2" src="images/earH11.jpg" alt="desk">
                <img id="image3" src="images/earH11view1.jpg" alt="desk">
                <img id="image4" src="images/earH11view2.jpg" alt="desk">
              </div>
            </div>
          <p class="p-name">moon gold earings</p>
          <div class="desc-price">
          <p class="p-description">14k Yellow Gold</p>
          <p class="p-price">$70</p>
          </div>
         
         </div>

         <div  class="product-details"  id="product-12">
          <div class="change-img-hover">
              <div class="img-normal">
                <img id="image1" src="images/ear12.jpg" alt="vision">
              </div>
              <div class="img-hover" onclick="viewProduct('product-12')">
                <img id="image2" src="images/earH12.jpg" alt="desk">
                <img id="image3" src="images/earH12view1.jpg" alt="desk">
                <img id="image4" src="images/earH12view2.jpg" alt="desk">
              </div>
            </div>
          <p class="p-name"> Linked Stud Earrings</p>
          <div class="desc-price">
          <p class="p-description">Sterling Silver</p>
          <p class="p-price">$68</p>
          </div>
         
         </div>
      
      </div>
  </div>

    
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
            <i class="fa fa-
            phone" aria-hidden="true"></i>
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
   
  `;
  // Add the product details page to the body of the document
  document.body.innerHTML = productPage;
  
}
function clickme(smallImg) {

var fullImg = document.getElementById("imagebox");
fullImg.src = smallImg.src;

}
function addToCart(productName, productPrice, productImage) {


var cartItems = JSON.parse(localStorage.getItem("cart")) || [];

for (var i = 0; i < cartItems.length; i++) {
var item = cartItems[i];
name = item.name;


const addToCartBtn = document.getElementById('shop');
const popup = document.getElementById('popup');

if (name === productName) {
addToCartBtn.addEventListener('click', () => {
  popup.innerHTML = "Item Already in Cart!"
popup.style.display = 'block';

setTimeout(() => {
  popup.style.display = 'none';
}, 3000);
});
 return;
}else{
  addToCartBtn.addEventListener('click', () => {
popup.style.display = 'block';

setTimeout(() => {
  popup.style.display = 'none';
}, 3000);
});
}





}
var item = {
  name: productName,
  price: productPrice,
  image: productImage,
};

cartItems.push(item);
localStorage.setItem("cart", JSON.stringify(cartItems));
//alert("Item added to cart");
}
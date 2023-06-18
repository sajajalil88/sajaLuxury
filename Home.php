<!--
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
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    <link rel="stylesheet" href="Home.css">
</head>
<body>
<?php include "Header.php" ?>


<!-- start of banner slider -->

<div class="carousel-home">
    <div class="carousel_inner">
       <div class="carousel_item carousel_item__active">
          <img src="images/home1.png" class="carousel_img">
       </div>
       <div class="carousel_item">
          <img src="images/home2.png" alt="" class="carousel_img">
          
       </div>
       <div class="carousel_item">
        <img src="images/home3.jpg" alt="" class="carousel_img">
        
     </div>
    </div>
 </div>
 <!-- start of category page -->


 <div class="category-section" id="top">
    <h2>Shop By Category</h2>
    <p>Brilliant design and unparalleled craftsmanship.</p>
    <div class="category-containers">
        <div class="category-box">
        <a href="Necklaces.php"><img src="images/cat1.png" alt="Image"></a>
            <p> <a href="Necklaces.php" style="text-decoration:none; color: black;" >Necklaces</a></p>
        </div>

        <div class="category-box">
        <a href="Bracelets.php"><img src="images/cat2.png" alt="Image"></a>
        <p> <a href="Bracelets.php" style="text-decoration:none; color: black;" >Bracelets</a></p>
        </div>

        <div class="category-box">
        <a href="Rings.php"><img src="images/cat3.png" alt="Image"></a>

           <p> <a href="Rings.php" style="text-decoration:none; color: black;" >Rings</a></p>

        </div>

        <div class="category-box">
        <a href="Earings.php"><img src="images/cat4.png" alt="Image"></a>
        <p> <a href="Earings.php" style="text-decoration:none; color: black;" >Earings</a></p>
        </div>

        <div class="category-box">
        <a href="Engagement.php"><img src="images/cat5.png" alt="Image"></a>
            <p> <a href="Engagement.php" style="text-decoration:none; color: black;" >Engagement Rings</a></p>
        </div>

        <div class="category-box">
        <a href=""><img src="images/cat6.png" alt="Image" ></a>
            <p> <a href="#" style="text-decoration:none; color: black;" >Watches</a></p>
        </div>
    </div>
</div>

<!-- start of banner pictures -->

<div class="pearl-banner">
    <div class="pearl-1">
        <img src="images/banner2.jpg" />
        <p class="pearl-p">The sea hath its pearls, The heaven hath its stars;<br>
            But my heart, my heart, My heart hath its love.</p>
            <button class="pearl-b">Shop Pearl</button>
    </div>

    <div class="pearl-2">
        <img src="images/banner1.jpg" />
    </div>
</div>


<!-- start of banner pictures -->
<h2 class="h2-loved">Our Mostly Loved </h2>
<p class="p-loved">shop from our mostly loved products.</p>
<div class="mostly-liked">
           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid1.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH1.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid2.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
            
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid3.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH3.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
           
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>


           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid4.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH4.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
            
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid5.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH5.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
           
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid6.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/slidH6.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
           
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/slid8.jpg" alt="vision">
                </div>
                <div class="img-hover">
                    <img src="images/slidH8.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
          
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
           </div>
           
        </div>
        <i  class="fas fa-chevron-right arrow"></i>


<!-- start of engagement section -->

<div class="love-banner">
  <div class="love-1">
      <img src="images/eng1.png" />
    
  </div>

  <div class="love-2">
      <img src="images/eng2.png" />
  </div>

  <div class="love-3">
   <h2>Love Your Way</h2>
   <p>You'll know who it's for. You'll know when it's time. You'll just know.</p>
   <p class="p-btn"><a href='Engagement.php' style="text-decoration:none; color: black;">Explore Love & Engagement  <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
</div>

</div>

<!-- start of gifts section 




<h2 class="arrival-title">Our Gifts</h2>
<p class="arrival-title2">Get the best gifts for your beloved ones</p>
-->

<!--
<section class="product-section">
  <div class="left-side">
    <img src="images/about1.png" alt="Fixed Image">
  </div>
  <div class="right-side">
    <div class="product-container">
      <div class="product">
        <img src="images/ring1.jpg" alt="Product 1">
        <h3>Product 1</h3>
        <p>Description of Product 1</p>
        <p>$19.99</p>
      </div>
      <div class="product">
          <img src="images/ring1.jpg" alt="Product 1">
        <h3>Product 2</h3>
        <p>Description of Product 2</p>
        <p>$29.99</p>
      </div>
      <div class="product">
          <img src="images/ring1.jpg" alt="Product 1">
        <h3>Product 3</h3>
        <p>Description of Product 3</p>
        <p>$39.99</p>
      </div>
      
    </div>
  </div>
</section>
-->

<h2 class="h2-loved">Newley Arrived </h2>
<p class="p-loved">shop from our newly arrived products.</p>
<div class="mostly-liked">
    
           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival1.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH1.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Pave Diamond Ring</p>
           
            <p class="p-description">13k Yellow Gold</p>
            <p class="p-price">$1000</p>
            </div>
         

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival2.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Diamond Croissant Hoops</p>
            
            <p class="p-description">10k Yellow Gold</p>
            <p class="p-price">$800</p>
            </div>
       
           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival3.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH3.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Boyfriend Bold Chain Necklace</p>
           
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$300</p>
            </div>
        

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival4.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH4.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Pearl Dropping Earings</p>
          
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$100</p>
            </div>
        

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival5.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH5.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Bold Pearl Double Wrap Bracelet </p>
            
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$130</p>
            </div>
         
           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival8.jpeg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH8.jpeg" alt="desk">
                </div>
              </div>
            <p class="p-name">Round Box Chain ID Bracelet </p>
           
            <p class="p-description">Sterling Silver</p>
            <p class="p-price">$178</p>
           </div>

           <div class="product-details">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img src="images/arrival6.jpg" alt="vision">
                </div>
                <div class="img-hover">
                  <img src="images/arrivalH6.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Dot Chain Anklet </p>
          
            <p class="p-description">4k Yellow Gold</p>
            <p class="p-price">$180</p>
            </div>
          
           
        </div>
        <i class="fas fa-chevron-right arrow"></i>

    
<div class="pearl-banner2">
  <div class="pearl-1">
    <h2 class="about-h2">From the Source</h2>
    <p class="about-p">Handcrafting the world’s best diamonds starts with knowing where they come from.
       We proudly trace 100% of our rough diamonds to known mines and sources.</p>
       <p class="p-btn" style="margin-left: 37%;margin-top: -4%; font-family:Sandral w01; cursor:pointer;"> <a href="About.php"  style='color:black;'> About Us </a> <i class="fa fa-angle-right" aria-hidden="true"></i></p>
  </div>

  <div class="pearl-2">
      <img src="images/about2.png" />
  </div>
</div>




<div class="instagram spad">
  <h2 style="display: flex; justify-content: center;   font-family: Santral W01;">Follow Us On Instagram</h2>
  <p style="display: flex; justify-content: center;   font-family: Santral W01;">Follow us at @SajaLuxuryy</p>
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <div class="instagram__pic">
                  <img class="instagram__pic__item set-bg" src="images/insta1.jpg"/>
                  <img class="instagram__pic__item set-bg" src="images/insta2.jpg"/>
                  <img class="instagram__pic__item set-bg" src="images/insta3.png"/>
                  <img class="instagram__pic__item set-bg" src="images/insta4.jpg"/>
                  <img class="instagram__pic__item set-bg" src="images/insta5.jpg"/>
                  <img class="instagram__pic__item set-bg" src="images/insta6.png"/>
              </div>
          </div>
         
      </div>
  </div>
</div>
<br><br><br><br>

<div class="subscribe">
	<p class="subscribe__copy">JOIN OUR NEWSLETTER TO ENJOY<br> 10% OFF NEXT ORDER.</p>
	<form class="form">
		<input type="email" class="form__email" placeholder="Enter your email address" required>
		<button class="form__button" type="Submit" >Subscribe</button>
</form>
</div>
<br>
<br><br><br><br> 


<h2 class="news-h2">Our Journal</h2>
<div class="news-section">

  <div class="news1">
 <img src="images/journal1.png"  alt="/" />
 <p class="p1">we answered about ear stacking!</p>
 <p class="p2">   
  If you have recently added some new piercings to your ears or are looking for ways
  to achieve a stacked look without having to add any, read on...
  </p>
  <p class="p3">Read More</p>
  </div>
  <div class="news3">
    <img src="images/journal2.png"  alt="/" />
    <p class="p1">how to win your favorite wishlist</p>
 <p class="p2">   
  Would you like the chance to win your entire EB wishlist? 
  We are giving one of you the chance to win a £500 gift to spend on your wishlist!...
  </p>
  <p class="p3">Read More</p>
  </div>

  <div class="news3">
    <img src="images/journal3.png"  alt="/" />
    <p class="p1">how to mix silver and gold jewellery</p>
 <p class="p2">   
Do you remember the days when it was a total fashion if mixed metal jewellery was worn together? 
The shock of wearing a gold bracelet and...
  </p>
  <p class="p3">Read More</p>
  </div>


</div>










<footer class="footer-distributed">
<hr clas="hr">
  <div class="footer-left">
    <h3>Saja<span>Luxury</span></h3>

    <p class="footer-links">
      <a href="#">Home</a>
      |
      <a href="#">About</a>
      |
      <a href="#">Contact</a>
      |
      <a href="#">Jewerley</a>
    </p>

    <p class="footer-company-name">© 2023 Saja Luxury Pvt. Ltd.</p>
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

<script >

const arrows_slider= document.querySelectorAll(".arrow");
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


</script>
</body>
</html>
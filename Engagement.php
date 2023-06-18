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
    <link rel="stylesheet" href="rings.css">
</head>
<body>
    
<?php include "Header.php" ?>
    
    <div class="back-shop">
      <img style="width: 100%;" src="images/engagement.png" alt="/" />
    </div>
    <div class="rings-shop">
    
        <div class="product-details"  id="product-1">
          
            <div  class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/eng1.jpg" alt="vision" >
                </div>
                <div class="img-hover" onclick="viewProduct('product-1')">
                  <img id="image2" src="images/engH1.jpg" alt="desk">
                  <img id="image3" src="images/engH1view1.jpg" alt="desk">
                  <img id="image4" src="images/engH1view2.jpg" alt="desk">
                </div>
               </div>
         <p class="p-name" id="name">Pavé Diamond Thin Dôme Ring </p>
         <div class="desc-price">
         <p class="p-description" id="description">14k Yellow Gold, Diamond</p>
         <p class="p-price" id="price">$850</p>
         </div>
        
        
        </div>

        <div   class="product-details"  id="product-2">
            <div  class="change-img-hover">
                <div class="img-normal" >
                  <img id="image1" src="images/eng2.jpg" alt="vision" >
                </div>
                <div class="img-hover" onclick="viewProduct('product-2')">
                  <img id="image2" src="images/engH2.jpg" alt="desk">
                  <img id="image3" src="images/engH2view1.jpg" alt="desk">
                  <img id="image4" src="images/engH2view2.jpg" alt="desk">
                </div>
               </div>
         <p class="p-name">Diamonds Cluster Ring</p>
         <div class="desc-price">
         <p class="p-description">14k Gold, Diamond</p>
         <p class="p-price">$2200</p>
         </div>
       
        </div>

        <div  class="product-details"  id="product-3">
            <div  class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/eng3.jpg" alt="vision" >
                </div>
                <div class="img-hover" onclick="viewProduct('product-3')">
                  <img id="image2" src="images/engH3.jpg" alt="desk">
                  <img id="image3" src="images/engH3view1.jpg" alt="desk">
                  <img id="image4" src="images/engH3view2.jpg" alt="desk">
                </div>
               </div>
         <p class="p-name">Eternity Band Ring</p>
         <div class="desc-price">
         <p class="p-description">14k Diamond</p>
         <p class="p-price">$1200</p>
         </div>
        
        </div>

        <div  class="product-details"  id="product-10">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/ring9.jpg" alt="vision">
                </div>
                <div class="img-hover" onclick="viewProduct('product-10')">
                  <img id="image2" src="images/ringH9.jpg" alt="desk">
                  <img id="image3" src="images/ringH9view1.jpg" alt="desk">
                  <img id="image4" src="images/ringH9view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">4mm Curve Band</p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$500</p>
            </div>
        
           </div>

           <div  class="product-details"  id="product-11">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/ring10.jpg" alt="vision">
                </div>
                <div class="img-hover"  onclick="viewProduct('product-11')">
                  <img id="image2" src="images/ringH10.jpg" alt="desk">
                  <img id="image3" src="images/ringH10view1.jpg" alt="desk">
                  <img id="image4" src="images/ringH10view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Round Diamond Bold Ring</p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold, Diamond</p>
            <p class="p-price">$3500</p>
            </div>
           
           </div>
           <div class="product-details"  id="product-6">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/ring5.jpg" alt="vision">
                </div>
                <div class="img-hover" onclick="viewProduct('product-6')">
                  <img id="image2" src="images/ringH5.jpg" alt="desk">
                  <img id="image3" src="images/ringH5view1.jpg" alt="desk">
                  <img id="image4" src="images/ringH5view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Pavé Diamond Soft Ring </p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold, Diamond</p>
            <p class="p-price">$1750</p>
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
  <div id="container">

  </div>
</body>
<script>
const products = document.getElementsByClassName("product-details");
    for (let i = 0; i < products.length; i++) {
        products[i].addEventListener("click", function () {
            // Get the product details
            const name = this.querySelector(".p-name").textContent;
            const description = this.querySelector(".p-description").textContent;
            const priceCart = this.querySelector(".p-price").textContent.replace("$","");
            const productImageSrc1 = this.querySelector('#image1').getAttribute('src');
            const productImageSrc2 = this.querySelector('#image2').getAttribute('src');
            const productImageSrc3 = this.querySelector('#image3').getAttribute('src');
            const productImageSrc4 = this.querySelector('#image4').getAttribute('src');

            // Redirect to the single product page with product details as URL parameters
            const urlParams = new URLSearchParams({
                name: name,
                description: description,
                priceCart: priceCart,
                productImageSrc1: productImageSrc1,
                productImageSrc2: productImageSrc2,
                productImageSrc3: productImageSrc3,
                productImageSrc4: productImageSrc4
            });

            window.location.href = `single-product.html?${urlParams.toString()}`;
        });
    }

</script>

</html>
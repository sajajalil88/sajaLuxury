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
      <img style="width: 100%;height: 50%;" src="images/gifts.png" alt="/" />
    </div>


<br><br><br>
    <div class = "filter-btns">
        <button type = "button" class = "filter-btn" id = "all">all</button>
        <button type = "button" class = "filter-btn" id = "men">Men</button>
        <button type = "button" class = "filter-btn" id = "women">Women</button>
    
    </div>
    <div class="rings-shop">
       
        <div class="product-details all men"  id="product-1">
          
         <div  class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/men1.jpg" alt="vision" >
             </div>
             <div class="img-hover"  onclick="viewProduct('product-1')">
               <img id="image2" src="images/menH1.jpg" alt="desk">
               <img id="image3" src="images/menH1view1.jpg" alt="desk">
               <img id="image4" src="images/menH1view2.jpg" alt="desk">
             </div>
            </div>
         <p class="p-name" id="name">Black Onyx Pendant Necklace</p>
         <div class="desc-price">
         <p class="p-description" id="description">14k Yellow Gold</p>
         <p class="p-price" id="price">$550</p>
         </div>
        
       
        </div>

        <div   class="product-details all women"  id="product-2">
         <div  class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/slid15.jpg" alt="vision">
             </div>
             <div class="img-hover" onclick="viewProduct('product-2')">
               <img id="image2" src="images/slidH15.jpg" alt="desk">
               <img id="image3" src="images/slidH15view1.jpg" alt="desk">
               <img id="image4" src="images/slidH15view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Double Chain Necklace</p>
         <div class="desc-price">
         <p class="p-description">14k Yellow Gold</p>
         <p class="p-price">$500</p>
         </div>
       
        </div>

        <div  class="product-details all men"  id="product-3">
         <div class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/men2.jpg" alt="vision">
             </div>
             <div class="img-hover" onclick="viewProduct('product-3')">
               <img id="image2" src="images/menH2.jpg" alt="desk">
               <img id="image3" src="images/menH2view1.jpg" alt="desk">
               <img id="image4" src="images/menH2view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Black Onyx Square Signet Ringe</p>
         <div class="desc-price">
         <p class="p-description">14k Yellow Gold</p>
         <p class="p-price">$600</p>
         </div>
       
        </div>

        <div  class="product-details all women"  id="product-4">
         <div class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/slid4.jpg" alt="vision">
             </div>
             <div class="img-hover"  onclick="viewProduct('product-4')">
               <img id="image2" src="images/slidH4.jpg" alt="desk">
               <img id="image3" src="images/slidH4view1.jpg" alt="desk">
               <img id="image4"src="images/slidH4view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Single Bold Chain Necklace</p>
         <div class="desc-price">
         <p class="p-description">14k Yellow Gold</p>
         <p class="p-price">$500</p>
         </div>
        
        </div>

        <div  class="product-details all men"  id="product-5">
         <div class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/men3.jpg" alt="vision">
             </div>
             <div class="img-hover" onclick="viewProduct('product-5')">
               <img id="image2" src="images/menH3.jpeg" alt="desk">
               <img id="image3" src="images/menH3view1.jpeg" alt="desk">
               <img id="image4" src="images/menH3view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Round Box Chain Bracelet</p>
         <div class="desc-price">
         <p class="p-description">14k Yellow Gold</p>
         <p class="p-price">$400</p>
         </div>
       
        </div>

        <div class="product-details all women"  id="product-6">
         <div class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/slid6.jpg" alt="vision">
             </div>
             <div class="img-hover"  onclick="viewProduct('product-6')">
               <img id="image2" src="images/slidH6.jpg" alt="desk">
               <img id="image3" src="images/slidH6view1.jpg" alt="desk">
               <img id="image4" src="images/slidH6view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Letters gold Chain Necklace</p>
         <div class="desc-price">
         <p class="p-description">14k Yellow Gold</p>
         <p class="p-price">$190</p>
         </div>
       
        </div>

        <div  class="product-details all men"  id="product-7">
         <div class="change-img-hover">
             <div class="img-normal">
               <img id="image1" src="images/men4.jpg" alt="vision">
             </div>
             <div class="img-hover" onclick="viewProduct('product-7')">
                 <img id="image2" src="images/menH4.jpg" alt="desk">
                 <img id="image3" src="images/menH4view1.jpg" alt="desk">
                 <img id="image4" src="images/menH4view2.jpg" alt="desk">
             </div>
           </div>
         <p class="p-name">Round Box Chain Bracelet</p>
         <div class="desc-price">
         <p class="p-description">7k Sterling Silver</p>
         <p class="p-price">$98</p>
         </div>
        
        </div>

        <div  class="product-details all men" id="product-8">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id ="image1" src="images/men5.jpg" alt="vision">
                </div>
                <div class="img-hover"  onclick="viewProduct('product-8')">
                  <img id="image2" src="images/menH5.jpg" alt="desk">
                  <img id="image3" src="images/menH5view1.jpg" alt="desk">
                  <img id="image4" src="images/menH5view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Curb Chain Bracelet</p>
            <div class="desc-price">
            <p class="p-description">7k Sterling Silver</p>
            <p class="p-price">$120</p>
            </div>
          
           </div>

           <div  class="product-details all women"  id="product-9">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/slid10.jpg" alt="vision">
                </div>
                <div class="img-hover" onclick="viewProduct('product-9')">
                  <img id="image2" src="images/slidH10.jpg" alt="desk">
                  <img id="image3" src="images/slidH10view1.jpg" alt="desk">
                  <img id="image4" src="images/slidH10view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Single daimond Chain Necklace</p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$700</p>
            </div>
       
           </div>

           <div  class="product-details all men"  id="product-10">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/men6.jpg" alt="vision">
                </div>
                <div class="img-hover"  onclick="viewProduct('product-10')">
                  <img id="image2" src="images/menH6.jpg" alt="desk">
                  <img id="image3" src="images/menH6view1.jpg" alt="desk">
                  <img id="image4" src="images/menH6view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Engravable ID Bracelet</p>
            <div class="desc-price">
            <p class="p-description">7k Sterling Silver</p>
            <p class="p-price">$200</p>
            </div>
           
           </div>

           <div  class="product-details  all women"  id="product-11">
            <div class="change-img-hover">
                <div class="img-normal">
                  <img id="image1" src="images/slid12.jpg" alt="vision">
                </div>
                <div class="img-hover" onclick="viewProduct('product-11')">
                  <img id="image2" src="images/slidH12.jpg" alt="desk">
                  <img id="image3" src="images/slidH12view1.jpg" alt="desk">
                  <img id="image4" src="images/slidH12view2.jpg" alt="desk">
                </div>
              </div>
            <p class="p-name">Diamond blue stone  Necklace</p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$970</p>
            </div>
         
           </div>

           <div  class="product-details all women"  id="product-12">
            <div class="change-img-hover">
              <div class="img-normal">
                <img id="image1" src="images/slid13.jpg" alt="vision">
              </div>
              <div class="img-hover" onclick="viewProduct('product-12')">
                <img id="image2" src="images/slidH13.jpg" alt="desk">
                <img id="image3" src="images/slidH13view1.jpg" alt="desk">
                <img id="image4" src="images/slidH13view2.jpg" alt="desk">
              </div>
            </div>
            <p class="p-name">Sun Chain Necklace</p>
            <div class="desc-price">
            <p class="p-description">14k Yellow Gold</p>
            <p class="p-price">$350</p>
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
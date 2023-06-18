<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <style>
@media (max-width:600px)
{
	.docs{
    margin-top:60%;
    margin-bottom:40%;
  }
  .docs .news-h2{
    width:100%;
    margin-left:0%;

  }
}
.visit__hero {
  font-family: Santral W01;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.visit__hero-content {
  font-family: Santral W01;
  width: 50%;
  padding: 8rem;
  position: relative;
  z-index: 1;
}

.visit__hero-content h2 {
  font-family: Santral W01;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
}

.visit__hero-content p{
    color: #000;
    font-family: Santral W01;
  font-size: 1.06rem;
  line-height: 1.8rem;
  margin-bottom: 1.5rem;

}
.visit__hero-content a{
  color: #000;
    font-family: Santral W01;
  font-size: 1.06rem;
  line-height: 1.8rem;
  margin-bottom: 1.5rem;
}
.visit__hero-image {
  background: url('images/visti1.png') no-repeat center center fixed;
  background-size: cover;
  height: 100vh;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

/* Mobile styles */
@media only screen and (max-width: 800px) {
  .visit__hero-content {
    width: 90%;
    padding: 0.7rem;
  }

  .visit__hero-content h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }

  .visit__hero-content p {
    font-size: 1rem;
    line-height: 1.2rem;
    margin-bottom: 1rem;
  }

  .visit__hero-image {
    height: 50vh;
  }
}
@media only screen and (min-width: 600px) and (max-width: 960px) {
  .visit__hero-content {
    width: 80%;
    padding: 5rem;
  }

  .visit__hero-content h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
  }

  .visit__hero-content p {
    font-size: 1.1rem;
    line-height: 1.8rem;
    margin-bottom: 1.5rem;
  }

  .visit__hero-image {
    height: 70vh;
  }
}

@media only screen and (min-width: 960px) and (max-width:1200px) {
  .visit__hero {
    flex-direction: row;
    align-items: center;
  }

  .visit__hero-content {
    width: 80%;
    padding: 10rem;
  }

  .visit__hero-content h2 {
    font-size: 3rem;
    margin-bottom: 2rem;
  }

  .visit__hero-content p {
    font-size: 1.2rem;
    line-height: 1.8rem;
    margin-bottom: 2rem;
  }

  .visit__hero-image {
    height: 100%;
    width: 100%;
  }
}
.visit__showroom-wrapper {
  font-family: Santral W01;
  display: flex;
  align-items: center;
}

.visit__showroom h3{
  font-family: Santral W01;
    display: flex;
    justify-content: flex-start;
    font-size: 2.5rem;
    margin-top: 10%;
    margin-left: 8%;
    margin-bottom: 4%;
}
.visit__showroom-image {
  margin-right:10%;
  width: 40%;
}

.visit__showroom-image img {
 width: 100%;
 height: 90%;
 margin-left: 20%;
}

.visit__showroom-details {
  font-family: Santral W01;
 width: 80%;
 margin-bottom: 10%;

}
.visit__showroom-details p{
    font-size: 1rem;
}
.visit__showroom-details h4{
   font-size: 2rem;
   margin-bottom:5%;
}
.visit__showroom-detail-blocks{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.visit__showroom-cta a{

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
    margin-top: 35%;
}
.visit__showroom-cta  a:hover{
  background-color: #fff;
    color: #000;
}
/* For screens smaller than 768px */
@media (max-width: 767px) {
  .visit__showroom-wrapper {
    flex-direction: column;
  }
  .visit__showroom-image {
    margin-right: 0;
    margin-bottom: 4%;
    width: 90%;
  }
  .visit__showroom-details {
    width: 100%;
  }
  .visit__showroom-detail-blocks {
    flex-direction: column;
    justify-content: center;
    margin-left: 13%;
  }
  .visit__showroom-cta a {
    width: 100%;
  }
  .visit__showroom-image img {
 width: 90%;
 height: 90%;
 margin-left: 8%;
}
.visit__showroom h3{
    display: flex;
    justify-content: flex-start;
    font-size: 1.8rem;
    margin-top: 10%;
    margin-left: 8%;
    margin-bottom: 4%;
}
.visit__showroom-details h4{
   font-size: 2rem;
   margin-left: 10%;
}
.visit__showroom-cta a{

margin-left: 12%;
}

}

/* For screens between 768px and 1024px */
@media (min-width: 768px) and (max-width: 1024px) {
    .visit__showroom-wrapper {
    flex-direction: row;
  }
  .visit__showroom-image {
    margin-right: 0;
    margin-bottom: 4%;
    width: 90%;
  }
  .visit__showroom-details {
    width: 100%;
  }
  .visit__showroom-detail-blocks {
    flex-direction: column;
    justify-content: center;
    margin-left: 13%;
  }
  .visit__showroom-cta a {
    width: 100%;
  }
  .visit__showroom-image img {
 width: 70%;
 height: 70%;
 margin-left: 8%;
}
.visit__showroom h3{
    display: flex;
    justify-content: flex-start;
    font-size: 1.8rem;
    margin-top: 10%;
    margin-left: 8%;
    margin-bottom: 4%;
}
.visit__showroom-details h4{
   font-size: 2rem;
   margin-left: 10%;
}
.visit__showroom-cta a{

margin-left: 12%;
}
.visit__showroom h3{
   
    margin-bottom: 2%;
}
}

.keep-me-posted {
  padding:50px;
  background-color:#E9DAC4;
  margin-top:10%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
/* Default styles */
.email-me {
  margin-top:10%;
  font-family: Santral W01;
  width: 50%;
  margin-bottom:0;
}
.me-form {
  font-family: Santral W01;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.form-row {
  display: flex;
 flex-direction:row;
  justify-content: center;
}

.form-component {
  margin: 5px;
}


input[type="email"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 2px;
  background-color: white;
  border:1px solid black;
  margin-bottom:100%;
  
}

button {
  background-color: #000;
padding:10px;
    border: 1px solid #000;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 10px;
    text-align: center;
    text-decoration: none;
    font-family: Santral W01;
 
}
button:hover{
   background-color: #fff;
    color: #000;
}

/* Media queries for smaller screens */
@media screen and (max-width: 768px) {
  .email-me {
    width: 100%;
  }
  
  input[type="email"] {
    font-size: 14px;
  }
  
  button {
    font-size: 5px;
    width:100%;
    padding:0px;
  }
}


.email-image {
  flex-basis: 50%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.email-image img {
  max-width: 80%;
  height: auto;
  margin-right:20%
}
.form-row{
  margin-top:5%;
  margin-left:10%;
}

.me-form h2{
  margin-bottom:2%;
}
@media screen and (max-width: 768px) {
  .keep-me-posted {
    flex-direction: column;
  }

  .email-me,
  .email-image {
    flex-basis: 100%;
    margin-top:0px;
  }

  .email-me {
    padding-right: 0;
    padding-bottom: 20px;
  }
}

.form-component input{
  outline:none;
}

      </style>
      <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
crossorigin="anonymous"/>
<script src="https://kit.fontawesome.com/89e6398017.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="Home.css">
</head>  

<body>
  <?php include "Header.php" ?>


<section class="our-story">
  <div class="me">
    <img src="images/me.png" alt="/" />
    <div class="our-story-text">
        <p>Saja, our CEO and Founder, developed SAJA LUXURY while getting her MBA at Wharton and launched the brand in 2013.
             Wanting to do away with the boring world of high-end jewelry intended only for special occasions..
             Saja also desired to build a brand which would support and empower women, which is the spirit behind the company's Good Girl Mission.</p> 
    </div>
</div>


    <div class="whoami">
        <p>Designed in New York City and handcrafted with care, our fine jewelry is produced at the same places as the traditional Fifth Avenue brands.
             But because crazy mark-ups aren't really our thing, you can always expect the most on-point,
             quality pieces at prices you can actually justify. Talk about a win-win.</p>
    </div>
</section> 


<section id="shopify-section-visit-showroom" class="shopify-section visit__showroom">
        <div class="visit__showroom-wrapper">
          <div class="visit__showroom-image">
            <img src="images/visit2.jpg" >
          </div>
          <div class="visit__showroom-details">
            <div class="visit__showroom-intro">
             
              <h4>Saja Luxury</h4>
            </div>
            <div class="visit__showroom-detail-blocks">
              <div class="visit__info-block">
                <strong>Address</strong>
                <p>Badaro, Beirut-lebanon<br>luxa Solitaire, Bldg. No. A</p>
              </div>
              <div class="visit__info-block">
                <strong>Hours</strong>
                <p>Wednesday - Saturday:<br>11am - 6pm<br><br>Sunday: <br>12pm - 6pm</p>
              </div>
              <div class="visit__info-block">
                <strong>Appointment Only Services</strong>
                <p>Styling Consultations<br>Bracelet Welding</p>
              </div>
              <div class="visit__info-block">
                <strong></strong>
                <p></p>
              </div>
            </div>
            <div class="visit__showroom-cta">
              <a class="cta cta--bordered" href="#">Make an appointment</a>
             
            </div>
          </div>
        </div>
      </section>


      <section class="keep-me-posted">

      <div class="email-me">

      <form class="me-form" action="POST">
        <h2 class="form-h2">See you real soon!!</h2>
        <p>Sign-up to be the first to know about our upcoming events.</p>
            <div class="form-row">
              <div class="form-component">
                <input id="email" type="email" autocomplete="email" name="email" tabindex="0" placeholder="Enter your email" aria-label="Email">
              </div>
              <div class="form-component">
                <button type="submit" >keep me posted</button>
              </div>
            </div>
          </form>
      </div>

      <div class="email-image">
      <img src="images/visit3.png" >
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
<script src="index.js"></script>
</body>
</html>
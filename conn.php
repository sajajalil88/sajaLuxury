<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!---- <title> Responsive Contact Us Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <style>

img {
  height: auto;
  width: 100%;
}

input[type=submit] {
  background: #fff;
  height: 2.75rem;
  margin: 1em auto auto;
}

@media (min-width: 768px) {
  input[type=submit] {
    background: #fff;
    bottom: 2.75rem;
    left: 2.55rem;
    height: 2.75rem;
    padding: 0 3rem;
    position: absolute;
  }
}

input[type=email],
input[type=text] {
  height: 1.5rem;
  margin: 0 0 1.15rem;
  width: 100%;
}

figure {
  overflow: hidden;
  position: relative;
  width: 100%;
}

@media (min-width: 768px) {
  figure {
    float: left;
    height: 100%;
    position: relative;
    width: 50%;
  }
}

form {
  overflow: hidden;
  padding: 10%;
  position: relative;
  width: 80%;
}
.text-small-uppercase{
  margin-bottom:-40%;
}

@media (min-width: 768px) {
  form {
    float: left;
    height: 88%;
    padding: 8%;
    width: 40%;
  }
}

main {
  margin: 30px auto auto;
  overflow: hidden;
  position: relative;
  width: 90%;
}

@media (min-width: 768px) {
  main {
    height: 21.25rem;
    left: 50%;
    margin: auto;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    width: 42.5rem;
  }
}

.headline {
  position: absolute;
  top: 8vw;
  width: 100%;
}

@media (min-width: 768px) {
  .headline {
    position: absolute;
    top: 3.4rem;
    width: 50%;
  }
}

/* Skin */

* {
  margin: 0;
  padding: 0;
}

body {
  background: #74bdb7;
 font-family:Sandral W01;
}

input[type=email],
input[type=text] {
  background: none;
  border: none;
  border-bottom: 2px solid #000;
  box-sizing: border-box;
  outline: none;
}

input[type=email]:required,
input[type=text]:required {
  box-shadow: none;
  outline: none;
}

input[type=submit] {

  background-color: #000;
    width: 85%;
    border: 1px solid #000;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    padding: 10px 14px;
    text-align: center;
    text-decoration: none;
    font-family: Santral W01;
}

input[type=submit]:hover,
input[type=submit]:focus {
  background: #fff;
  cursor: pointer;
  outline: none;
  color:#000;
}

.inputs--filled label {
  transform: translate(0, 0);
  font-family:Sandral W01;

}

.inputs--invalid input {
  border-bottom: 2px solid #000;
  box-shadow: none;
  color:#000;
  transform: translate3d(0, 0, 0);
  font-family:Sandral W01;
}

@keyframes shake {
  0%, 100% {
    transform: translate3d(0, 0, 0);
  }

  33% {
    transform: translate3d(-6px, 0, 0);
  }

  66% {
    transform: translate3d(6px, 0, 0);
  }
}

.inputs--invalid label {
  color: #000;
  font-family:Sandral W01;
}

label {
  display: inline-block;
  transform: translate(0, 1.25rem);
  transition: 0.15s;
  font-family:Sandral W01;
}

main {
  background: #f9f6ed;
  border-radius: 0.25rem;
  font-family:Sandral W01;
}

.text-headline {
  color: #74bdb7;
  letter-spacing: 0.4rem;
  font-family:Sandral W01;
  text-align: center;
  text-transform: uppercase;
}

@media (min-width: 768px) {
  .text-headline {
    font: 700 1.625rem 'Montserrat';
  }
}

.text-body {
  color: #000;
font-family:Sandral W01;
}

.text-small-uppercase {
  color: #000;
  font-family:Sandral W01;
  letter-spacing: .08rem;
  text-transform: uppercase;
  
}

.text-subheadline {
  color: #f37b56;
  left: -.17rem;
  letter-spacing: .143rem;
  font: 700 0.652rem 'Montserrat';
  margin-bottom: 1.5rem;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

@media (min-width: 768px) {
  .text-subheadline {
    font: 700 0.75rem 'Montserrat';
  }
}

   </style>
<body>
<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="Home.css">

<?php include "Header.php" ?>

<main>
  <figure>
    <picture>
    <img src="images/ring1.jpg" />
    </picture>
  </figure>
  <div class="headline">
   
  </div>
  <form>
    <span>
      <label for="username" class="text-small-uppercase">Username</label>
      <input class="text-body" id="username" name="username" type="text" required>
    </span>
    <span>
      <label for="email" class="text-small-uppercase">Email</label>
      <input class="text-body" id="email" name="email" type="email" required>
    </span>
    <input class="text-small-uppercase" id="submit" type="submit" value="Subscribe now">
  </form>
  
</main>
  
  <script>
var inputs = document.querySelectorAll( 'input[type=text], input[type=email]' );
for (i = 0; i < inputs.length; i ++) {
  var inputEl = inputs[i];
  if( inputEl.value.trim() !== '' ) {
    inputEl.parentNode.classList.add( 'input--filled' );
  }
  inputEl.addEventListener( 'focus', onFocus );
  inputEl.addEventListener( 'blur', onBlur );
}

function onFocus( ev ) {
  ev.target.parentNode.classList.add( 'inputs--filled' );
}

function onBlur( ev ) {
  if ( ev.target.value.trim() === '' ) {
    ev.target.parentNode.classList.remove( 'inputs--filled' );
  } else if ( ev.target.checkValidity() == false ) {
    ev.target.parentNode.classList.add( 'inputs--invalid' );
    ev.target.addEventListener( 'input', liveValidation );
  } else if ( ev.target.checkValidity() == true ) {
    ev.target.parentNode.classList.remove( 'inputs--invalid' );
    ev.target.addEventListener( 'input', liveValidation );
  }
}

function liveValidation( ev ) {
  if ( ev.target.checkValidity() == false ) {
    ev.target.parentNode.classList.add( 'inputs--invalid' );
  } else {
    ev.target.parentNode.classList.remove( 'inputs--invalid' );
  }
}

var submitBtn = document.querySelector( 'input[type=submit]' );
submitBtn.addEventListener( 'click', onSubmit );

function onSubmit( ev ) {
  var inputsWrappers = ev.target.parentNode.querySelectorAll( 'span' );
  for (i = 0; i < inputsWrappers.length; i ++) {
    input = inputsWrappers[i].querySelector( 'input[type=text], input[type=email]' );
    if ( input.checkValidity() == false ) {
      inputsWrappers[i].classList.add( 'inputs--invalid' );
    } else if ( input.checkValidity() == true ) {
      inputsWrappers[i].classList.remove( 'inputs--invalid' );
    }
  }
}

  </script>
</body>
</html>
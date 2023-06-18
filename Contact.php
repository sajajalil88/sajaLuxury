<?php

require_once "connection.php";

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['signup'])){

   $name = trim($_POST['name']);
   $email = trim($_POST['email']);
   $msg = trim($_POST['message']);
   $message = array();

   if(empty($name)){
      $message[] = 'Name is required!';
   }
   if(empty($email)){
      $message[] = 'Email is required!';
   }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $message[] = 'Invalid email format!';
   }
   if(empty($msg)){
      $message[] = 'Message is required!';
   }

   if(count($message) == 0){

      $select_message = mysqli_query($conn,"SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND message = '$msg'");

      if(mysqli_num_rows($select_message)> 0){
         $message[] = 'Already sent message!';
      }else{

         $insert_message = mysqli_query($conn,"INSERT INTO `message`(user_id, name, email, message) VALUES('$user_id','$name','$email','$msg')");
         $message[] = 'Sent message successfully!';

      }

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
.container-sign {
  display: flex;
  flex-direction: row;
  justify-content: center;

}
.error-message {
  color: red;
  display: none;
}


.signup-form {
  border :none;
  width: 40%;
  padding: 40px;
  background: #fff;
  border: 0.5px solid #000;
}

.image-signup img {
  width: 50%;
}

.form-group {
  position: relative;
  margin-bottom: 25px;
  margin-left:10%;
}

.form-group label {
  position: absolute;
  left: 20px;
  top: 0;
  color: #000;
  font-size: 18px;
  font-weight: normal;
  pointer-events: none;
  transition: all 0.3s ease-out;
}

.form-group input {
  width: 80%;
  padding: 10px 20px;
  border: none;
  border-bottom: 2px solid #000;
  font-size: 16px;
  color: #000;
  background: transparent;
}
.form-group textarea {
  width: 80%;
  padding: 10px 20px;
  border: none;
  border-bottom: 2px solid #000;
  font-size: 16px;
  color: #000;
  background: transparent;
}
.form-group input:focus {
  outline: none;
  border-bottom: 2px solid #81d8d0;
}

.form-group input:focus + label,
.form-group input:valid + label {
  top: -20px;
  font-size: 14px;
  color: #81d8d0;
}
.form-submit {
  background-color: #000;
  width: 80%;
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
.form-submit:hover{
	background-color:#fff;
	color:#000;
}
.signup h2{
    margin-top:100px;
  }
/* Media queries */
@media (max-width: 768px) {
  .signup h2{
    margin-top:200px;
  }
  .container-sign {
    margin-top:10px;
    flex-direction: column;
    margin-left: 15%;
  }

  .signup-form {
    width: 80%;
  }

  .image-signup img {
   /* margin-left:5%; */
    width:80%;
  }
 
}

@media (max-width: 480px) {
  .signup h2{
    margin-top:150px;
  }
  .container-sign {
    margin-left: 9%;
  }

  .signup-form {
    width: 90%;
    padding: 20px;
  }

  .image-signup img {
    width:90%
  }}
      @media screen (min-width:600px) and (max-width:700) {
        .signup h2{
    margin-top:450px;
  }
        .container-sign {
    margin-top:500px;
    flex-direction: column;
    margin-left: 15%;
  }

  .signup-form {
    width: 100%;
  }

  .image-signup img {
   /* margin-left:5%; */
    width:80%;
  }
      }
      @media screen (min-width:900px) and (max-width:1000) {
        .container-sign {
    margin-top:500px;
    flex-direction: column;
    margin-left: 15%;
  }

  .signup-form {
    width:400px;
  }

  .image-signup img {
   /* margin-left:5%; */
    width:80%;
  }
      }

      @media screen (min-width:800px) and (max-width:1000) {
        .container-sign {
    margin-top:300px;
    flex-direction: column;
    margin-left: 15%;
  }

  .signup-form {
    width: 100%;
  }

  .image-signup img {
   /* margin-left:5%; */
    width:80%;
  }
      }
      
      @media screen (min-width:100px) and (max-width:1200) {
        .container-sign {
    margin-top:300px;
    flex-direction: column;
    margin-left: 15%;
  }

  .signup-form {
    width: 100%;
  }

  .image-signup img {
   /* margin-left:5%; */
    width:80%;
  }
      }
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
  margin-top:-0.5%;
	display: block;
	width: 100%;
	position: fixed;
	z-index: 99;
  top:0;
  text-transform: uppercase;
}
.header .item-left{
	flex:0 0 17%;
}
.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
  margin-left:-78%;
  text-transform: uppercase;
}
.header .logoo span{
	color:#81d8d0;
}
.header .item-center{
	flex:0 0 66%;
  
}
.header .item-rightt{
   margin-top:-40px;
    display: flex;
    justify-content: flex-end;
    float: right;
    margin-left:15%;
    text-transform: uppercase;
 
  }
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 18px;
     color:#000;
     display: inline-block;
     margin-left: 15px;
     transition: color 0.3s ease;
     text-transform: uppercase;}
    
.header .menu > ul > li{
	display: inline-block;
	line-height: 50px;
	margin-left: 100%;
  text-transform: uppercase;
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
  text-transform: uppercase;
}
.menu-main{
  width:10000px;
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
	font-size: 16px;
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
	font-size: 14px;
	color:#000;
	font-weight: 500;
	line-height: 1;
	padding:7px 0;
  cursor: pointer;

}
.header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item .title:hover{
	font-size: 16px;

}
.menu-main {
  width: 700px;
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
	.header .item-rightt{
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
	.header .item-rightt{
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
  .header{

margin-top:-18%;
margin-bottom:-30%;
  }
 
	.header .item-center{
    flex:0 0 40%;
    margin-left: 100%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:80%;
}

.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:#000000;
	font-weight: 500;
	text-decoration: none;
	margin-left:2%;
}
}


@media (min-width:699px) and (max-width:700px)
{
	.header{

margin-top:-4%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:2%;
  margin-top:-45px;
}
.signup h2{
    margin-top:250px;
  }
  .container-sign {
    margin-left: 25%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .image-signup img{
    width:83%;
  }
}

@media (min-width:702px) and (max-width:820px)
{
  .header .container{
	max-width: 1000px;
height:30%;
top:0;
}
	.header{
    padding: 0;
margin-bottom:-30%;
margin-top:-7%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size:25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:5%;
  margin-top:-45px;
}
.signup h2{
    margin-top:250px;
  }
  .container-sign {
    margin-left: 18%;
	width:75%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .form-submit{

	background-color:red;
  }
}

@media (min-width:820px) and (max-width:830px)
{
	.header{

margin-top:-5%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:0%;
  margin-top:-45px;
}
.signup h2{
    margin-top:300px;
  }
  .container-sign {
	width:80%;
    margin-left: 10%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .image-signup img{
    width:83%;
  }
}
@media (min-width:830px) and (max-width:850px)
{
	.header{

margin-top:-4%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:0%;
  margin-top:-45px;
}
.signup h2{
    margin-top:300px;
  }
  .container-sign {
	width:70%;
    margin-left: 15%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .image-signup img{
    width:83%;
  }
}

@media (min-width:850px) and (max-width:950px)
{
	.header{

margin-top:-3%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:-2%;
  margin-top:-45px;
}
.signup h2{
    margin-top:300px;
  }
  .container-sign {
	width:70%;
    margin-left: 20%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .image-signup img{
    width:83%;
  }
}
@media (min-width:950px) and (max-width:990px)
{
	.header{

margin-top:0%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:90%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:-2%;
  margin-top:-45px;
}
.signup h2{
    margin-top:350px;
  }
  .container-sign {
	width:70%;
    margin-left: 20%;
  }

  .signup-form {
    width: 80%;
    padding: 16px;
  }
  .image-signup img{
    width:83%;
  }
}

@media (min-width:990px) and (max-width:1000px)
{
  .header .logoo a{
    font-size: 25px;
    color:black;
    font-weight: 500;
    text-decoration: none;
    margin-left: -40px;
  }
  .header .logoo span{
    color:red;
  }
  .header .item-center{
    flex:0 0 66%;

    
  }
  .menu-main {

margin-left: 25%;
margin-top: -6%;
}
  .header .item-rightt{
    margin-top:-50px;
    display: flex;
    justify-content: flex-end;
    float: right;
    margin-left: 8%;
  }
  .header .item-rightt a{ 
       text-decoration: none;
       font-size: 16px;
       color:#000;
       display: inline-block;
       margin-left: 10px;
       transition: color 0.3s ease;}
      
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
}

@media (min-width:600px) and (max-width:700px)
{
	.header{

margin-top:-15%;
margin-bottom:-30%;
  }
.header .item-rightt{
	flex:0 0 17%;
	display: flex;
	justify-content: flex-end;
	margin-left:85%;
}
.header .item-rightt a{ 
     text-decoration: none;
     font-size: 16px;
     color:#000;
     display: inline-block;
     margin-left: 10px;
     transition: color 0.3s ease;
	 float:right;
}

.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
	margin-left:2%;
  margin-top:-45px;
}
.signup h2{
    margin-top:250px;
	font-size:25px;
  }
}


@media screen and (min-width: 1000px) and (max-width:1200px) {
  .header .logoo a{
    font-size: 25px;
    color:black;
    font-weight: 500;
    text-decoration: none;
    margin-left: -40px;
  }
  .header .logoo span{
    color:red;
  }
  .header .item-center{
    flex:0 0 66%;

    
  }
  .container-sign {
	width:1400px;
    margin-left: -17%;
  }
  .menu-main {

margin-left: 10%;
margin-top: -1%;
}
  .header .item-rightt{
    margin-top:-50px;
    display: flex;
    justify-content: flex-end;
    float: right;
    margin-left: 8%;
  }
  .header .item-rightt a{ 
       text-decoration: none;
       font-size: 16px;
       color:#333;
       display: inline-block;
       margin-left: 10px;
       transition: color 0.3s ease;}
      
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
}

  @media screen and (min-width: 1050px) and (max-width:1080px) {
  
  .header .logoo a{
    font-size: 25px;
    color:black;
    font-weight: 500;
    text-decoration: none;
    margin-left: -35px;
  }
  .header .logoo span{
    color:pink;
  }
  .header .item-center{
    flex:0 0 66%;

    
  }
  .menu-main {

margin-left: 4%;
margin-top: -1%;
}
  .header .item-rightt{
    margin-top:-50px;
    display: flex;
    justify-content: flex-end;
    float: right;
    margin-left: 90%;
  }
  .header .item-rightt a{ 
       text-decoration: none;
       font-size: 16px;
       color:#333;
       display: inline-block;
       margin-left: 10px;
       transition: color 0.3s ease;}
      
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
  }}
@media (min-width:1100px)  and (max-width:1300px)
{

.header .logoo{
  width: 300px
}
.header .item-rightt{
  margin-left:10%;
  margin-top:-6%;
}
.header .logoo a{
	font-size: 25px;
	color:black;
	font-weight: 500;
	text-decoration: none;
  width: 100%;
  margin-left: -18%;
}
.menu-main {

  margin-left: 25%;
  margin-top: -5%;
  width:1000px;
  font-size:20px;
}

.container-sign {
	
    margin-left: -10%;
  }
}@media (min-width:1300px)  
{

.header .logoo{
  width: 300px
}
.header .item-rightt{
  margin-left:20%;
  margin-top:-4%;
}
.header .item-rightt a{
  font-size:16px;
}
.header .logoo a{
	font-size: 25px;
	color:#000;
	font-weight: 500;
	text-decoration: none;
  width: 100%;
  margin-left: -50%;
}

.menu-main {

  margin-left: 20%;
  margin-top: -5%;
  width:1000px;
  font-size:18px;
}
}

      </style>
</head>


<body> 
 <header class="header">
 	<div class="container">
 		<div class="row v-center">
 			<div class="header-item item-left">
 				<div class="logoo">
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
 			<div class="header-item item-rightt">
 				<a href="profile.php"><i class="fa fa-user-o" aria-hidden="true"></i></a>
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

    <section class="signup">
        <h2 style="display: flex; justify-content: center; font-family: Santral W01;">Let's Keep in Touch</h2><br>
        <div class="container-sign">
         
                <div class="signup-form">
                 
                    <form method="POST" class="register-form" id="register-form">
					<div class="form-group">
    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
    <input type="text" name="name" id="name" placeholder="Your Name" <?php if(isset($message) && in_array('Name is required!', $message)){ echo 'style="border: 1px solid red;"'; } ?> />
    <?php if(isset($message) && in_array('Name is required!', $message)){ echo '<p style="color: red;">required</p>'; } ?>
</div>

<div class="form-group">
    <label for="email"><i class="zmdi zmdi-email"></i></label>
    <input type="email" name="email" id="email" placeholder="Your Email" <?php if(isset($message) && (in_array('Email is required!', $message) || in_array('Invalid email format!', $message))){ echo 'style="border: 1px solid red;"'; } ?> />
    <?php if(isset($message) && in_array('Email is required!', $message)){ echo '<p style="color: red;">required</p>'; } ?>
    <?php if(isset($message) && in_array('Invalid email format!', $message)){ echo '<p style="color: red;">invalid email format</p>'; } ?>
</div>

<div class="form-group">
    <textarea id="message" name="message" placeholder="Send Us Your Feeds.." <?php if(isset($message) && in_array('Message is required!', $message)){ echo 'style="border: 1px solid red;"'; } ?>></textarea>
    <?php if(isset($message) && in_array('Message is required!', $message)){ echo '<p style="color: red;">required</p>'; } ?>
</div>

                       
                        <div class="form-group form-button">
                            <button type="submit" name="signup" id="signup" class="form-submit" value="Register">Send Message</button>
                           
                        </div>
                       
                        
                    </form>
</div>
            
        </div>
    </section>
        

<?php include "Footer.php" ?>

   
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



    </script>
</body>
</html>
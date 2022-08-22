<!DOCTYPE html>
<html lang="en">
  

  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PriyaKitchen</title>

    <!-- Font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CDN -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" media="all" />

    <!-- css file link-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    
    <?php wp_head(); ?>

    <style>
.center,.start-btn{
  position: absolute;
  top: 50%;
  left: -18%;
  transform: translate(-50%, -50%);
}
.start-btn a{
  font-size: 25px;
  background: white;
  color: #00a0d2;
  padding: 10px 15px;
  border-radius: 5px;
  letter-spacing: 1px;
  box-shadow: 5px 5px 15px rgba(0,0,0,.1);
}
.modal-box{
  top: 40%;
  opacity: 0;
  visibility: hidden;
  background: white;
  height: auto;
  width: 400px;
  padding: 30px;
  border-radius: 5px;
  border: 1px solid #50dcfb;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
}
.start-btn.show-modal{
  opacity: 0;
  visibility: hidden;
}
.modal-box.show-modal{
  top: 50%;
  opacity: 1;
  visibility: visible;
  transition: .4s;
}
.modal-box .fa-times{
  position: absolute;
  top: 0;
  right: 0;
  background: #00a0d2;
  height: 45px;
  width: 50px;
  line-height: 40px;
  color: white;
  font-size: 18px;
  border-radius: 0 5px 0 50px;
  padding-left: 13px;
  cursor: pointer;
}
.fa-times:hover{
  font-size: 22px;
}
.modal-box .icon1{
  font-size: 60px;
  background: #00a0d2;
  height: 120px;
  width: 120px;
  color: white;
  border-radius: 50%;
  line-height: 120px;
  text-align: center;
  margin-bottom: 10px;
}
.modal-box header{
  font-size: 31px;
  font-family: 'Lobster Two';
  margin-bottom: 10px;
}
.modal-box p{
  /* margin-bottom: 10px; */
  line-height: 20px;
  color: grey;
}
form input, form button{
  height: 50px;
  width: 95%;
  border-radius: 3px;
}
form .icon2{
  position: absolute;
  height: 50px;
  width: 50px;
  margin-top: 15px;
  background: #00a0d2;
  color: white;
  line-height: 50px;
  font-size: 24px;
  border-radius: 5px 0 0 5px;
}
form input{
  margin-top: 15px;
  padding: 0 65px;
  font-size: 18px;
  outline: none;
  border: 2px solid #1ed2fa;
  caret-color: #00a0d2;
}
input::placeholder{
  color: #8c8c8c;
}
form input:focus{
  box-shadow: 0 0 15px #82e6fc,
              0 0 25px #b4f0fd,
              0 0 35px #ffffff;
}
form button{
  margin-top: 15px;
  background: #00a0d2;
  color: white;
  font-size: 25px;
  border: 1px solid #1ed2fa;
  letter-spacing: 1px;
  cursor: pointer;
  outline: none;
  transition: .3s;
}
form button:hover{
  background: #1ed2fa;
  border: 1px solid #05cdfa;
  letter-spacing: 2px;
}
.modal-box .icons{
  margin-top: 25px;
}
      </style>
    
</head>
<script>
         $(document).ready(function(){
           $('.start-btn').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
           $('.fa-times').click(function(){
             $('.modal-box').toggleClass("show-modal");
             $('.start-btn').toggleClass("show-modal");
           });
         });
      </script>

<body>
    <!-- Header section start -->
    <header class="header">
        <div class="header-container">
            <div class="row header-inner">
                <div class="col-lg-4">
                <div id="mySidenav" class="sidenav">
                    <a href="" class="closebtn" onclick="closeNav()">&times;</a>
                      <nav class="navigation-menu">
			            <?php wp_nav_menu() ?>
                      </nav>
                </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                </div>
                <div class="col-lg-4">
                    <div class="header-logo">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo-image"  /></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-right">
                        <div class="header-subscribe">
                        <div class="start-btn">
                          <a href="#">Subscribe</a>
                        </div>
                        <div class="center modal-box">
                          <div class="fas fa-times"></div>
                          <form action="">
                              <input type="email" required placeholder="abc@example.com">
                              <button>Subscribe</button>
                          </form>
                        </div>
                        <div class="search-wrapper">
                            <div class="header-search">
			                    <?php get_search_form(); ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end  -->

    
    




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
    <?php wp_head(); ?>
    
</head>

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
                            <a href="#">SUBSCRIBE</a>
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
    




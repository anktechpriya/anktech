<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

<header class="site-header">
<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>

    <nav class="navigation-menu">
    <?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu() ?>
        </nav>
</header>

<!DOCTYPE html>
<html lang="en">
  
<head>
</head>
  
<body>

    <nav class="navbar navbar-default">
  
        <div class="container-fluid">
  
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    PriyaKitchen
                </a>
            </div>
            <nav class="navigation-menu">
              <?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu() ?>
        </nav>
        </div>
    </nav>

    

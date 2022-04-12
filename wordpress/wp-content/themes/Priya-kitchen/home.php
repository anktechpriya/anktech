<?php
/* Template Name: Home
*/
get_header();
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
  .carousel-inner img {
    width: 100%;
    height: 400px;
  }

  .category{
    color: #444;
    font-size: 30px;
    margin: 0 0 10px px;
    text-transform: none;
    font-family: brusherbold!important;
    font-weight: 400!important;
    text-align: center;
    padding-top: 35px;
  }

img {
  
    
    height: 312px;
    width: 277px;
}
a.more-link, .more-from-category a {
    color: #222;
    float: right;
    font-size:20px;
    letter-spacing: 2px;
    padding: 5px 20px;
    text-transform: uppercase;
}
.caption{
  text-align: center;
}


ul.post-meta {
    list-style: none;
}

li.menu-item {
    padding: 0 12px;
}

.menu {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}

</style>
</head>
<body>

<!-- slider start -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider1.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
</div>
<!-- slider start -->

    <div>
        <h3 class = "category">Browse by category</h3>
    </div>

<!-- section for browse by category start -->
    <div class="container">
  <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'chinese',
    );

        $posts = new WP_Query($args);
        if($posts -> have_posts()) : ?>
        <?php while ($posts -> have_posts()) :
        $posts -> the_post(); ?>

    <div class="col-md-3">
      <div class="thumbnail">
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
          <div class="caption">
            <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    </div>
    
        <?php endwhile;
        endif; ?>

    </div>
</div>
<!-- section of browse by category ends -->

    <div>
        <h3 class = "category">Latest Recipes</h3>
    </div>

<!-- section of latest recipes start -->    
    <div class="container">
  <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'latest',
    );

        $posts = new WP_Query($args);
        if($posts -> have_posts()) : ?>
        <?php while ($posts -> have_posts()) :
        $posts -> the_post(); ?>

    <div class="col-md-4 col-lg-4">
      <div class="thumbnail">
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
          <div class="caption">
            <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    </div>

        <?php endwhile;
        endif; ?>

    </div>
  </div>
<!-- section of latest recipes end -->

       <div>
          <h3 class = "category">Main Course</h3>
       </div>

<!-- section of main course start -->       
      <div class="container">
        <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'main',
    );

        $posts = new WP_Query($args);
        if($posts -> have_posts()) : ?>
        <?php while ($posts -> have_posts()) :
        $posts -> the_post(); ?>

    <div class="col-md-3">
      <div class="thumbnail">
      
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
          <div class="caption">
            <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
        
              <h6><?php the_meta(); ?></h6>
        
          </div>
        </a>
      </div>
    </div>

        <?php endwhile;
        endif; ?>

    </div>
</div>
<!-- section of main course ends -->

      <div class= "container">
        <div class="textwidget custom-html-widget">
            <p class="more-from-category">
                <a href="/blog/" title="Mains">More from main course</a>
            </p>
        </div>
      </div>

        <div>
      <?php get_footer(); ?>
      </div>

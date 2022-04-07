<?php
/* Template Name: Home
*/
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  
  .carousel-inner img {
    width: 100%;
    height: 800px;
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
    vertical-align: middle;
    border-style: none;
    height: 300px;
    width: 270px;
}
.thumbnail img {
    vertical-align: middle;
    border-style: none;
    height: 423px;
    width: 367px;
}
a.more-link, .more-from-category a {
    color: #222;
    float: right;
    font-size:20px;
    letter-spacing: 2px;
    padding: 5px 20px;
    text-transform: uppercase;
}
.labeling{
  margin-top: 150px;
}
.form-control {
    display: block;
    padding-left: 480px;
    font-weight: 400;
    margin-left:20px;
    margin-right: 20px;
}
</style>
</head>
<body>

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

    <div>
        <h3 class = "category">Browse by category</h3>
    </div>

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

    <div>
        <h3 class = "category">Latest Recipes</h3>
    </div>

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

    <div class="col-md-4">
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

      <div class= "container">
        <div class="textwidget custom-html-widget">
            <p class="more-from-category">
                <a href="/blog/" title="Mains">View all recipes</a>
            </p>
        </div>
      </div>

      <div class="labeling">
        <form name="registration_form" id='registration_form' class="form-inline">

          <div class="form-group">
              <label for="firstname" class="sr-only"></label>
              <input id="firstname" class="form-control input-group-lg reg_name" type="text" name="firstname" title="Enter first name" placeholder="First name"/>
          </div>

          <div class="form-group">
              <label for="email" class="sr-only"></label>
              <input id="email" class="form-control input-group-lg" type="text" autocapitalize='off' name="email" title="Enter email" placeholder="Email Address"/>
          </div>

          <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Submit" class="form-control input-group-lg">
          </div>
        
        </form>
       </div>

       <div>
          <h3 class = "category">Main Course</h3>
       </div>

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
          </div>
        </a>
      </div>
    </div>

        <?php endwhile;
        endif; ?>

    </div>
</div>

      <div class= "container">
        <div class="textwidget custom-html-widget">
            <p class="more-from-category">
                <a href="/blog/" title="Mains">More from main course</a>
            </p>
        </div>
      </div>


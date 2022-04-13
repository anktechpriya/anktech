<?php
/* Template Name: Home
*/
get_header();
?>
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
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider1.png" alt="slider1" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.jpg" alt="slider2" />
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider3.jpg" alt="slider3" />
    </div>
  </div>
  
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
</div>
<!-- slider end -->

    <div>
        <h3 class = "category">Browse by category</h3>
    </div>

<!-- section for browse by category start -->
    <div class="container">
      <div class="row">
        <?php
        $categories = get_categories();
          foreach($categories as $category) {
           echo '<div class="col-md-3"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
          }
        ?>
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
      'category_name' => 'latest'
);

$posts = new WP_Query($args);
if ($posts->have_posts()): ?>
        <?php while ($posts->have_posts()):
        $posts->the_post(); ?>

    <div class="col-md-4 col-lg-4">
      <div class="thumbnail">
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
          <div class="caption">
            <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    </div>

        <?php
    endwhile;
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
    'category_name' => 'main'
);

$posts = new WP_Query($args);
if ($posts->have_posts()): 
         while ($posts->have_posts()):
        $posts->the_post(); ?>

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

        <?php
    endwhile;
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

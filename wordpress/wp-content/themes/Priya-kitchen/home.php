<?php
/* Template Name: Home
*/
get_header();
?>

<div class = "hero">
    <img src = "http://localhost/anktech/wordpress/wp-content/uploads/2022/03/food.jpg" style="width:100%;">
    <div class="text-block">
    <h4>Chennai kitchen</h4>
    <p>I’ve grown up in the kitchen along side my<br> mum and grandmothers and conversations <br>in my family are always about the next meal.<br> I’ve picked up their love for food along the way, <br>and with this blog, I share my food story with you.</p>
  </div>
</div>

<div>
    <h3 class = "category"><span>Browse by category</span></h3>
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
         <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail(150, 150); ?></a>
      </div>
          <div class="caption">
          <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    
 
          <?php endwhile;
          endif;
          ?>
          </div>
          </div>
          <div>
              <h3 class = "category"><span>Latest Recipes</span></h3>
          </div>
          <div>
              <?php
          $args = array(
              'post_type' => 'post',
              'category_name' => 'italian',
              

          );

$posts = new WP_Query($args);
if($posts -> have_posts()) : ?>
<?php while ($posts -> have_posts()) :
$posts -> the_post(); ?>

    <div class="col-md-4">
      <div class="thumbnail">
         <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail(150, 150); ?></a>
      </div>
          <div class="caption">
          <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    
 
          <?php endwhile;
          endif;
          ?>
          </div>

            <div>
                <h3 class = "category"><span>Main Course</span></h3>
            </div>

          <div class="container">
            <div class="row">
            <?php
          $args = array(
              'post_type' => 'post',
              'category_name' => 'punjabi',
              

          );

$posts = new WP_Query($args);
if($posts -> have_posts()) : ?>
<?php while ($posts -> have_posts()) :
$posts -> the_post(); ?>

    <div class="col-md-3">
      <div class="thumbnail">
         <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail(150, 150); ?></a>
      </div>
          <div class="caption">
          <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
          </div>
        </a>
      </div>
    
 
<?php endwhile;
endif;
?>
</div>
</div>

<?php
get_footer(); ?>
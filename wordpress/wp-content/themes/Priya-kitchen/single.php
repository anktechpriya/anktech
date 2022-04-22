<?php
get_header();
?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
 <!-- Start food-story section -->
 <section class="food-story">
        <div class="container">
            <div class="food-story_left">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Start main course section -->
                        <div class="main-course">
                        <h2><?php the_title() ?></h2>
                            <div class="row mb-5">
                            <?php

                            if ( have_posts()):
                                while ( have_posts()):
                                    the_post(); ?>
                <div class="col-lg-12 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('1200*1200'); ?></a>
                <p> <?php the_content(); ?></p>
                </a>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
                        </div>
                        <!-- End main course section -->
                    </div>
                    <!-- End left section -->

                    <!-- Start right section -->
                    <div class="col-lg-4">
                        <!-- Start persion details section -->
                        <div class="row">
                            <div class="col-lg-12 right_content">
                                <div class="right_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mobile-top.jpg" alt="mobile-top">
                                </div>
                                <p class="text-center"><strong>I am rakhi</strong> the cook, writer and photographer
                                    behind this little
                                    blog. I’ve grown up in the kitchen along side my mum and grandmothers and
                                    conversations in my family are always about the next meal. I’ve picked up their love
                                    for food along the way, and with this blog, I share my food story with you.
                                </p>
                            </div>
                        </div>
                        <!-- End persion details section -->

                        <!-- Start top recipes section -->
                        <div class="top-recipes">
                            <h2 class="mb-4">Top Recipes</h2>
                            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'chicken'
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-6 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                </a>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
                        </div>
                        <!-- End top recipes section -->
                        <!-- Start christmas favourites sectoin -->
                        <div class="christmas-favourites">
                            <h2 class="mb-4">Christmas Favourites</h2>
                            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'pulao'
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-6 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('thumbnail'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                </a>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
                        </div>
                        <!-- End christmas favourites sectoin -->
                        <!-- End right section -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End food story section -->



<?php get_footer(); ?>
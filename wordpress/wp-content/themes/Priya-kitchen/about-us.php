<?php
/* Template Name: About Us
*/
get_header(); ?>

<!-- Meet Richa section start -->
<section class="meetricha">
        <div class="container">
            <div class="row">
                <!-- left side start -->
                <div class="col-lg-8 meetricha_content">
                    <h1 class="mb-3"><?php the_title(); ?></h1>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>
                <!-- left side end -->
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
    </section>
    <!-- Meet Richa section end -->

<?php get_footer(); ?>
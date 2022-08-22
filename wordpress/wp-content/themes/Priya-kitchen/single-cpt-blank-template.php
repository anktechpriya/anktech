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
                                custom_post_types_get_custom_template();
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
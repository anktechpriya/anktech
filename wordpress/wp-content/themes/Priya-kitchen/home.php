<?php
/* Template Name: Home
*/
get_header();
?>
  <!-- hero banner section start  -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-banner__inner">
                <div class="hero-banner-content">
                    <h1 class="text-center">Hi There!</h1>
                    <p>I’m Richa, the cook, writer and photographer behind this little blog. I’ve grown up in the
                        kitchen along side my mum and grandmothers and conversations in my family are always about the
                        next meal. I’ve picked up their love for food along the way, and with this blog, I share my food
                        story with you.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- hero banner section end  -->

    <!-- Start section browse-category -->
    <section class="browse-category py-2">
        <div class="container">
            <div class="browse_heading">
                <h2>Browse by Category</h2>
                <div class="row">
                <?php
                    $categories = get_categories();

                    foreach ($categories as $category)
                    {
                        $image_id = get_term_meta($category->term_id, 'image_id', true);
                    ?>
                    <div class="col-lg-3 browse-category_content">
                    <?php
                      echo '<a href="' . get_category_link($category->term_id) . '">' . wp_get_attachment_image($image_id, 'large') . '</a>';

                      echo '<center><h3><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></h3></center>';
                  ?>
                    </div>
                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End section browse-category -->

    <!-- Start section latest recipes -->
    <section class="latets-recipes pt-2 pb-5">
        <div class="container">
            <div class="latest-recipes_heading">
                <h2>Latest Recipes</h2>
            </div>
            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'latest'
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-4 pl-2 pr-2 latest-recipes_content">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                <?php the_meta(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
            <div class="view-recipes">
                <p class="viw_recipes mb-0"><a href="<?php echo home_url();?>/blog/" class="vegitable_recipes">View all recipes</a></p>
            </div>
        </div>
    </section>

    <!-- End section latest recipes -->

        <!-- Start section restaurant style food -->

        <section class="restaurant-food">
        <div class="container">
            <div class="restaurant-food_heading">
                <h2>5 Tips to Amazing Indian Food</h2>
                <p class="text-center">Get my secrets to restaurant style food!</p>
            </div>
            <div class="restaurant-food_content">
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="names" placeholder="First Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="email" placeholder="E-Mail Address">
                        </div>
                        <div class="col-lg-4 search_name">
                            <button class="go_button" type="submit" name="insert">Go</button>
                        </div>
                    </div>
                </form>
            </div>

            <?php
                if (isset($_POST['insert'])){
                    global $wpdb;
                    $e = $_POST['email'];
                    $n = $_POST['names'];

                    $sql = $wpdb -> insert(
                        'contact_demo',
                        array(
                            'names' => $n,
                            'email' => $e,
                        )
                        );
                        if($sql == true){
                            echo '<script>
                            alert("Thanks!! We will get in touch with you soon");
                          </script>
                          ';
                        }else{
                            echo 'error';
                        }
                } 
                ?>
        </div>
    </section>
    <!-- End section restaurant style food -->

    <!-- Start food-story section -->
    <section class="food-story">
        <div class="container">
            <div class="food-story_left">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Start main course section -->
                        <div class="main-course">
                            <h2 class="common_dash">Main Course</h2>
                            <div class="row mb-5">
                                <?php
                                    $args = array(
                                    'category_name' => 'chinese',
                                    'posts_per_page' => 3
                                    );

                                        $posts = new WP_Query($args);
                                        if ($posts->have_posts()): ?>
                                            <?php while ($posts->have_posts()):
                                            $posts->the_post(); ?>
                                                <div class="col-lg-4 common_class">
                                                    <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                                                <div class="caption">
                                                    <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                                                </div>
                                                    <?php the_meta(); ?>
                                                </div>
                                                <?php
                                            endwhile;
                                        endif; ?>
                            </div>
                            <div class="main-course_button">
                                <p class="mb-0 text-right"><a href="<?php echo home_url();?>/blog/" class="more_from">More from Main Course</a></p>
                            </div>
                        </div>
                        <!-- End main course section -->

    <!-- Start chicken section -->
    <div class="chicken space-course">
        <h2 class="common_dash">Chicken</h2>
        <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'chicken',
              'posts_per_page' => 3
              );

                $posts = new WP_Query($args);
                if ($posts->have_posts()): ?>
                    <?php while ($posts->have_posts()):
                    $posts->the_post(); ?>
                <div class="col-lg-4 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                <?php the_meta(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
                <div class="main-course_button">
                    <p class="mb-0 text-right"><a href="<?php echo home_url();?>/blog/" class="more_from">More from Chicken</a></p>
                </div>
    </div>
    <!-- End chicken section -->

        <!-- Start Pressure Cooker Recipes section -->
        <div class="pressure_cooker space-course">
            <h2 class="common_dash_1">Pressure Cooker Recipes</h2>
            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'main',
              'posts_per_page' => 3
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-4 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                <?php the_meta(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
                <div class="main-course_button">
                    <p class="mb-0 text-right"><a href="<?php echo home_url();?>/blog/" class="more_from"> More from Pressure Cooker</a>
                    </p>
                </div>
            </div>
        <!-- End Pressure Cooker Recipes section -->


        <!-- Start How To's section -->
        <div class="how_To space-course">
            <h2 class="common_dash">How To's</h2>
            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'crispy'
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-4 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                <?php the_meta(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
            <div class="main-course_button">
                <p class="mb-0 text-right"><a href="<?php echo home_url();?>/blog/" class="more_from">More from How To's</a></p>
            </div>
        </div>
        <!-- End How To's section -->


        <!-- Start One Pot Meals section -->
        <div class="One-Pot space-course">
            <h2 class="common_dash_2">One Pot Meals</h2>
            <div class="row mb-5">
            <?php
              $args = array(
              'category_name' => 'pulao'
              );

          $posts = new WP_Query($args);
          if ($posts->have_posts()): ?>
            <?php while ($posts->have_posts()):
            $posts->the_post(); ?>
                <div class="col-lg-4 common_class">
                 <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
                <div class="caption">
                  <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
                </div>
                <?php the_meta(); ?>
                </div>
                <?php
            endwhile;
        endif; ?>
            </div>
            <div class="main-course_button">
                <p class="mb-0 text-right"><a href="<?php echo home_url();?>/blog/" class="more_from">More from One Pot Meals</a></p>
            </div>
        </div>
        <!-- End One Pot Meals section -->
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
  
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Food Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <h1 style="text-align: center;">Welcome to Chennai Kitchen</h1>
          <p>I’m Priya, the developer and masterchef behind this little blog. I’ve grown up in the technical filed along side my mum and grandmothers and conversations in my family are always about the new technology.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
        setTimeout(function() {
        $('#exampleModal').modal('show')  }, 10000);
        }); 
    </script>


    <!-- bootstrap -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php get_footer(); ?>

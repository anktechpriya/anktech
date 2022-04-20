<?php
get_header();
?>
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
<?php

if ( have_posts()):
    while ( have_posts()):
         the_post(); ?>
		<div class="row">
    <div class="col-lg-4 pl-2 pr-2 latest-recipes_content">
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
    </div>
    <div class="col-lg-4 pl-2 pr-2 latest-recipes_content"> 
        <?php the_content(); ?>
    </div>
    </div>
   <?php
    endwhile;
    
else:
    echo '<p>There are no posts!</p>';

endif; ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom Widgets') ) : ?> <?php endif; ?>

<?php get_footer(); ?>
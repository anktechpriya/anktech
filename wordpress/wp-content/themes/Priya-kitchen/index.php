<?php
get_header();
?>

<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <div class="container">
        <?php echo category_description( get_category_by_slug( 'category-slug' )->term_id ); ?>
    </div>
      <div class="container">
        <div class="row"> 
<?php


if ( have_posts()):
    while ( have_posts()):
         the_post(); ?>
		
    <div class="col-lg-4 pl-2 pr-2 latest-recipes_content">
        <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_post_thumbnail('full'); ?></a>
            <div class="caption">
        <h3> <a href = "<?php echo get_the_permalink(get_the_ID()); ?>" > <?php the_title(); ?></a></h3>
            </div>
    </div>
			
   
	<?php
    endwhile;
    
else:
    echo '<p>There are no posts!</p>';

endif; ?>
</div>
</div>

<?php get_footer(); ?>

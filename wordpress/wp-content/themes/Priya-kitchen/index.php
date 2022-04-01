<?php
get_header(); 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

<article class="post">

<?php if ( has_post_thumbnail() ) { ?>
                <div class="small-thumbnail">
					<?php the_post_thumbnail( 'small-thumbnail' ); ?>
                </div>
			<?php } ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<?php the_content() ?>
</article>
	
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;
get_footer();

?> 


 

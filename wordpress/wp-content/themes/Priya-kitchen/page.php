<?php

get_header();
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

        <article class="page-layout">
            <h2><?php the_title() ?></h2>
			<div class="container"><?php the_content() ?></div>
        </article>
	
	<?php endwhile;

else :
	echo '<p>There are no pages!</p>';
endif;
get_footer();
?>


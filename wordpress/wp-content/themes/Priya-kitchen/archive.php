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

<div>
   
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'post',
    'posts_per_page' => 2,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part( 'template-parts/content', get_post_type() );       
    endwhile;

    $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('< Previous'),
            'next_text'    => __('Next >'),
        ));
    }    
}
wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>

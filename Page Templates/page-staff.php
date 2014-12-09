<?php /** Template Name: Staff */ get_header(); ?>


<div class="inner">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div id="pagetitle" class="s24 bold green"><?php the_title(); ?></div>
	<div id="pagecontent"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>



<div id="staffleft" class="fleft">
	<?php get_template_part('staff'); ?>
</div>

<div id="staffright" class="fleft">

	<?php
	$args = array( 'posts_per_page' => 3000, 'order' => 'ASC', 'orderby' => 'title' );
	$lastposts = get_posts( $args );
	foreach ( $lastposts as $post ) :
	  setup_postdata( $post ); ?>
		<?php get_template_part('staffresults'); ?>
	<?php endforeach; wp_reset_postdata(); ?>
	<br style="clear:both" />
</div>
<br style="clear:both" />

</div>

<?php get_footer(); ?>
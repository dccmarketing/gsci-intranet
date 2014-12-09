<?php get_header(); ?>


<div class="inner">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div id="pagetitle" class="s24 bold green"><?php the_title(); ?></div>
	<div id="pagecontent"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>

</div>



<?php get_footer(); ?>
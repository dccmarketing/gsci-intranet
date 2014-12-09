<?php /** Template Name: Files */ get_header(); ?>


<div class="inner">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div id="pagetitle" class="s24 bold green"><?php the_title(); ?></div>
	<div id="pagecontent"><?php the_content(); ?>
	

<?php if(get_field('files')): ?>
<?php while(has_sub_field('files')): ?>
      <div><a href="<?php the_sub_field('file'); ?>"><?php the_sub_field('name'); ?></a> (<?php the_sub_field('type'); ?>)</div>
<?php endwhile; ?>
<?php endif; ?>

	</div>


<?php endwhile; ?>
<?php endif; ?>

</div>



<?php get_footer(); ?>
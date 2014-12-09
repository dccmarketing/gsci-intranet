<?php get_header(); ?>


<div class="inner">


<div id="staffleft" class="fleft">
	<?php get_template_part('staff'); ?>
</div>

<div id="staffright" class="fleft">

<div id="categoryname" class="bold green s22">
<?php single_cat_title('Currently Browsing '); ?>
</div>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('staffresults'); ?>
	<?php endwhile; ?>
	<?php else : ?>
		//Something that happens when a post isn’t found.
	<?php endif; ?>
	<br style="clear:both" />
</div>
<br style="clear:both" />

</div>

<?php get_footer(); ?>
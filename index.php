<?php get_header(); ?>

<div id="fpcol">

<div id="fpcol1" class="fleft">
	<a href="/tools/troop-in-a-kit/">
	<div id="troopkit" class="fpbox overflow border10">
		<div id="fpbox-img"><img src="<?php the_field('troopkit','146'); ?>"></div>
		<div id="fpbox-overlay"></div>
		<div id="fpbox-title" class="center">
			<span class="s27 upper">Troop Kit</span><br />
			<span class="s13"><?php the_field('troopkitinfo','146'); ?></span>
		</div>
	</div>
	</a>
	<a href="/tools/templates/">
	<div id="templates" class="fpbox overflow border10">
		<div id="fpbox-img"><img src="<?php the_field('templates','146'); ?>"></div>
		<div id="fpbox-overlay" style="margin-top: -52px !important;height: 77px !important;"></div>
		<div id="fpbox-title" class="center s24 upper">Templates & Forms</div>
	</div>
	</a>
</div>


<div id="fpcol2" class="fleft">
	<div id="photoofothemonth" class="fpbox overflow border10">
		<div id="fpbox-img"><img src="<?php the_field('photoofthemonth','146'); ?>"></div>
		<div id="fpbox-overlay"></div>
		<div id="fpbox-title" class="center" style="padding: 5px 0 !important;">
			<span class="s27 upper">Photo of the month</span><br />
			<span class="s17 upper"><?php the_field('photoofthemonthinfo','146'); ?></span>
		</div>
	</div>
</div>


<div id="fpcol3" class="fleft">
	<div id="fpforum" class="fpbox overflow border10">
		<div id="fpforum-title" class="white upper center">
			<span class="s27">Leader Board</span><br />
			<span class="s34">Hot Topics</span>
		</div>
		<div id="fpforum-con">
	<?php if ( is_active_sidebar( 'homepage' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'homepage' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>

		</div>
	</div>

	<div id="fpform" class="fpbox overflow border10">
		<div id="fpform-title" class="white upper center">
			<span class="s27">Chime In</span>
		</div>
		<div id="fpform-con">
			This site is designed to enhance your volunteer experience.
			If there are additional things you would like to see on this site,
			<a href="/chime-in/">click here</a> to share your ideas.
		</div>
	</div>
</div>


<br style="clear:both" />

</div>

<?php get_footer(); ?>
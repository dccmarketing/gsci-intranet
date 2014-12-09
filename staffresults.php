<div id="staff" class="fleft">

	<div id="staff-title" class="white s18"><?php the_title(); ?></div>
	<div id="staff-con">
		<div><?php the_field('title'); ?></div>
		<div><?php the_field('location'); ?></div>
		<div><?php the_field('phone'); ?> • <a href="mailto:<?php the_field('email'); ?>">email</a></div>
	</div>
</div>
<div id="staff-stafflist1">
	<div id="stafflist-title" class="s18 white">County</div>
	<div id="stafflist-con">
		<?php if ( is_active_sidebar( 'staff' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'staff3' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<div id="staff-stafflist2">
	<div id="stafflist-title" class="s18 white">Center</div>
	<div id="stafflist-con">
		<?php if ( is_active_sidebar( 'staff2' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'staff2' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<div id="staff-stafflist1">
	<div id="stafflist-title" class="s18 white">Function</div>
	<div id="stafflist-con">
		<?php if ( is_active_sidebar( 'staff' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'staff' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
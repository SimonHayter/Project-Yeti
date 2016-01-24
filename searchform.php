<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="large-9 small-9 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'projectyeti'); ?>">
		</div>
		<div class="large-3 small-3 columns text-right">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'projectyeti'); ?>" class="button postfix">
		</div>
	</div>
</form>
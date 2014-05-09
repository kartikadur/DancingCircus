<form class="navbar-search navbar-right" role="search" action="<?php echo esc_url(home_url('/')); ?>" method="get">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search" value="<?php get_search_query(); ?>" name="s">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" value="<?php esc_attr_x('Search', 'submit button'); ?>" >
				<i class="glyphicon glyphicon-search"></i>
			</button></span>
	</div>

</form>
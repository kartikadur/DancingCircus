<section id="sidebar" class="col-md-4 col-sm-12 col-xs-12">
	<aside id="hours-location" class>
		<h3>Hours &amp; Location</h3>
		<ul class="list-group">
			<?php dynamic_sidebar(); ?>
		</ul>
	</aside>
	<aside id="post-recent">
		<h3>Recent Posts</h3>
		<ul class="list-group">
			<?php
			/** function truncates string at or below maxlength to the closes complete word **/
			function truncate_str($str, $maxlen) {
				if (strlen($str) <= $maxlen)
					return $str;

				$newstr = substr($str, 0, $maxlen);
				if (substr($newstr, -1, 1) != ' ')
					$newstr = substr($newstr, 0, strrpos($newstr, " "));

				return $newstr;
			}
			?>
			<?php
			$args = array('numberposts' => '5');
			$recent_posts = wp_get_recent_posts($args);
			foreach ($recent_posts as $recent) {
				echo '<li class="list-group-item"><span class="badge">' . Date('M d, Y', strtotime($recent['post_date'])) . '</span><a href="' . get_permalink($recent["ID"]) . '" title="Look at ' . esc_attr($recent["post_title"]) . '" >' . $recent["post_title"] . '</a>';
				echo '</li>';
			}
			?>
		</ul>
	</aside>
	<aside id="post-categories">
		<h3>Categories</h3>
		<ul class="list-group">
			<?php
			$args = array('orderby' => 'name', 'order' => 'ASC');
			$categories = get_categories($args);
			foreach ($categories as $category) {
				echo '<li class="list-group-item"><span class="badge">' . $category -> count . '</span><a href="' . get_category_link($category -> term_id) . '" title="' . sprintf(__("View all posts in %s"), $category -> name) . '" ' . '>' . $category -> name . '</a>';
				echo '</li>';
			}
			?>
		</ul>
	</aside>
	<aside id="post-tags">
		<h3>Tags</h3>
		<?php $args = array('smallest' => 11, 'largest' => 32, 'unit' => 'px', 'number' => 200, 'format' => 'array', 'separator' => "", 'orderby' => 'name', 'order' => 'RAND', 'exclude' => '', 'include' => '', 'topic_count_text_callback' => default_topic_count_text, 'link' => 'view', 'taxonomy' => 'post_tag', 'echo' => true, 'child_of' => null); ?>
		<?php $arr = wp_tag_cloud($args); ?>
		<ul id="tag-links" class="col-xs-12">
			<?php
			if (!empty($arr)) {
				foreach ($arr as $value) {
					$ptr1 = strpos($value, 'font-size:');
					$ptr2 = strpos($value, 'px');
					$px = round(substr($value, $ptr1 + 10, $ptr2 - $ptr1 - 10));
					$value = substr($value, 0, $ptr1 + 10) . $px . substr($value, $ptr2);
					$ptr1 = strpos($value, "class=");
					$value = substr($value, 0, $ptr1 + 7) . 'color-' . $px . ' ' . substr($value, $ptr1 + 7);
					echo '<li>' . $value . '</li> ';
				}
			}
			?>
		</ul>
	</aside>
</section>
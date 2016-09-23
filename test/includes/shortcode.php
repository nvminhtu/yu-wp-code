<?php
/* Template directory */
add_shortcode('tmpurl', 'shortcode_tmpurl');
function shortcode_tmpurl() {
	return get_bloginfo('template_url');
}
/* Top page URL */
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
	return get_bloginfo('url');
} ?>
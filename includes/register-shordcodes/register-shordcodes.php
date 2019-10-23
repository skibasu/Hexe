<?php

function home_link($params, $content = null) {

	extract(shortcode_atts(array(
		'link' => network_home_url()
	), $params));

  return "<a class='custom-link' href='$link'>$content</a>";
}
add_shortcode('link','home_link');

function mail_link($params, $content = null) {

	extract(shortcode_atts(array(
		'link' => '#'
	), $params));

  return "<a class='mail-link' href='mailto:$link'>$content</a>";
}

add_shortcode('mail','mail_link');

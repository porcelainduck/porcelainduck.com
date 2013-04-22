<?php

get_header();

$postObject = $wp_query->get_queried_object();
$slug =  $postObject->post_name;

if (is_front_page())
{
	get_template_part('loop', 'home');
}
else if (is_single())
{
	get_template_part('loop', 'single');
}
else
{
	get_template_part('loop', 'home');
}

get_sidebar();

get_footer();

?>
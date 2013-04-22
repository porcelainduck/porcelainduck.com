<?php

// custom excerpt lengths
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		
		$excerpt = implode(" ", $excerpt) . '';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	
	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
	
	return $excerpt;
}


// responsive embed shortcode //
function responsive_embed_function($atts, $content = null)
{
	$string = <<< EOS
	<div class="embed-container">
	   <iframe src="
EOS;
	
	$string .= $atts[0];
	
	$string .= <<< EOS
?rel=0">
	   </iframe>
	</div>
EOS;
	
	return $string;
}

add_shortcode('responsive-embed', 'responsive_embed_function');


?>
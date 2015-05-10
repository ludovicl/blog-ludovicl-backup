<?php
/* ----------------------------SPXWPRISM---------------------------------*/

function spxwprism_css_func($atts,$content=null) {
	$content = str_replace ( "<p>" ,"" , $content );
	$content = str_replace ( "</p>" ,"", $content );
	extract(shortcode_atts(array(
		'linenumbers' => 'true',
 		'datastart' => '1'
 	), $atts));
	
	$preclass ='';
	if ($linenumbers == 'true') $preclass = 'class="line-numbers"';
	
	return ('<pre '.$preclass.' data-start="'.$datastart.'" ><code class="language-css">'.$content.'</code></pre>');
}
add_shortcode('CSS', 'spxwprism_css_func');

function spxwprism_markup_func($atts,$content=null) {
	$content = str_replace ( "<p>" ,"" , $content );
	$content = str_replace ( "</p>" ,"", $content );
	extract(shortcode_atts(array(
		'linenumbers' => 'true',
 		'datastart' => '1'
 	), $atts));
	
	$preclass ='';
	if ($linenumbers == 'true') $preclass = 'class="line-numbers"';
	
	return ('<pre '.$preclass.' data-start="'.$datastart.'" ><code class="language-markup">'.$content.'</code></pre>');
}
add_shortcode('MARKUP', 'spxwprism_markup_func');

function spxwprism_clike_func($atts,$content=null) {
	$content = str_replace ( "<p>" ,"" , $content );
	$content = str_replace ( "</p>" ,"", $content );
	extract(shortcode_atts(array(
		'linenumbers' => 'true',
 		'datastart' => '1'
 	), $atts));
	
	$preclass ='';
	if ($linenumbers == 'true') $preclass = 'class="line-numbers"';
	
	return ('<pre '.$preclass.' data-start="'.$datastart.'" ><code class="language-clike">'.$content.'</code></pre>');
}
add_shortcode('CLIKE', 'spxwprism_clike_func');

function spxwprism_php_func($atts,$content=null) {
	$content = str_replace ( "<p>" ,"" , $content );
	$content = str_replace ( "</p>" ,"", $content );
	extract(shortcode_atts(array(
		'linenumbers' => 'true',
 		'datastart' => '1'
 	), $atts));
	
	$preclass ='';
	if ($linenumbers == 'true') $preclass = 'class="line-numbers"';
	
	return ('<pre '.$preclass.' data-start="'.$datastart.'" ><code class="language-php">'.$content.'</code></pre>');
}
add_shortcode('PHP', 'spxwprism_php_func');


?>
<?php
/**
 * Funções extras
 *
 * cuidado! alterações deve ser feitas por um profissional
 */

// EXCERPT 2
function excerpt2($limit) {
$excerpt2 = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt2)>=$limit) {
array_pop($excerpt2);
$excerpt2 = implode(" ",$excerpt2).'...';
} else {
$excerpt2 = implode(" ",$excerpt2);
}
$excerpt2 = preg_replace('`\[[^\]]*\]`','',$excerpt2);
return $excerpt2;
}

// EXCERPT 3
function excerpt3($limit) {
$excerpt3 = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt3)>=$limit) {
array_pop($excerpt3);
$excerpt3 = implode(" ",$excerpt3).'<br/><a href="'.get_permalink().'" class="btn btn-default " href="#" role="button">Leia Mais</a>';
} else {
$excerpt3 = implode(" ",$excerpt3);
}
$excerpt3 = preg_replace('`\[[^\]]*\]`','',$excerpt3);
return $excerpt3;
}

/*REDES SOCIAIS*/
add_filter('admin_init', 'redes_sociais');
    function redes_sociais(){
	    register_setting('general', 'facebook', 'esc_attr');
	    add_settings_field('facebook', '<label for="facebook">'.__('Facebook' , 'facebook' ).'</label>' , 'redes_sociais_html', 'general');
	}
	function redes_sociais_html(){
	    $value = get_option( 'facebook', '' );
	    echo '<input type="text" id="fb" name="facebook" value="' . $value . '" />';
	}

    /*TWITTER */
	add_filter('admin_init', 'redes_sociais2');
    function redes_sociais2(){
	    register_setting('general', 'twitter', 'esc_attr');
	    add_settings_field('twitter', '<label for="twitter">'.__('twitter' , 'twitter' ).'</label>' , 'redes_sociais2_html', 'general');
	}
	function redes_sociais2_html(){
	    $value = get_option( 'twitter', '' );
	    echo '<input type="text" id="tw" name="twitter" value="' . $value . '" />';
	}

	/*instagran */
	add_filter('admin_init', 'redes_sociais_instagran');
    function redes_sociais_instagran(){
	    register_setting('general', 'instagran', 'esc_attr');
	    add_settings_field('instagran', '<label for="instagran">'.__('instagran' , 'instagran' ).'</label>' , 'redes_sociais_instagran_html', 'general');
	}
	function redes_sociais_instagran_html(){
	    $value = get_option( 'instagran', '' );
	    echo '<input type="text" id="tw" name="instagran" value="' . $value . '" />';
	}

	/*pinterest */
	add_filter('admin_init', 'redes_sociais_pinterest');
    function redes_sociais_pinterest(){
	    register_setting('general', 'pinterest', 'esc_attr');
	    add_settings_field('pinterest', '<label for="pinterest">'.__('pinterest' , 'pinterest' ).'</label>' , 'redes_sociais_pinterest_html', 'general');
	}
	function redes_sociais_pinterest_html(){
	    $value = get_option( 'pinterest', '' );
	    echo '<input type="text" id="tw" name="pinterest" value="' . $value . '" />';
	}

	/*plus */
	add_filter('admin_init', 'redes_sociais_plus');
    function redes_sociais_plus(){
	    register_setting('general', 'plus', 'esc_attr');
	    add_settings_field('plus', '<label for="plus">'.__('plus' , 'plus' ).'</label>' , 'redes_sociais_plus_html', 'general');
	}
	function redes_sociais_plus_html(){
	    $value = get_option( 'plus', '' );
	    echo '<input type="text" id="tw" name="plus" value="' . $value . '" />';
	}

	/*flickr */
	add_filter('admin_init', 'redes_sociais_flickr');
    function redes_sociais_flickr(){
	    register_setting('general', 'flickr', 'esc_attr');
	    add_settings_field('flickr', '<label for="flickr">'.__('flickr' , 'flickr' ).'</label>' , 'redes_sociais_flickr_html', 'general');
	}
	function redes_sociais_flickr_html(){
	    $value = get_option( 'flickr', '' );
	    echo '<input type="text" id="tw" name="flickr" value="' . $value . '" />';
	}


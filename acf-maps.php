<?php

function my_acf_google_map_api( $api ){
	$google_map_api_key = get_field('google_map_api_key','option');
	if(!empty($google_map_api_key)){
 		$api['key'] = $google_map_api_key;
  		return $api;
  	}else{
  		$api['key'] = '';
  		return $api;
  	}
} 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>

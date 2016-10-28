<?php
/**
 * File Name: plugins.php
 * Date: 22-10-2016
 * Time: 22:55
 * Description:
 */
function plugins() {
    $plugins=array(
    	array(
    		'name'=>'Redux Framework',
		    'slug'=>'redux-framework',
		    'required'=>true
	    )
    );
	// congif TGM
	$configs=array(
		'menu'=>'plugins',
		'dismissable'=>false,
		'is_automatic'=>true
	);
	tgmpa($plugins,$configs);
}
add_action('tgmpa_register','plugins');

?>
<?php
add_action('admin_menu', 'apartment');


/*
	アパート賃貸物件用
 */
function apartment() {
    add_menu_page('賃貸物件の管理', '賃貸物件の管理', 'manage_options', 'my-page-slug', 
    	function(){
    		include_once 'estate/index.php';
    	}
	);	
	add_submenu_page('my-page-slug', '売買物件の管理','売買物件の管理', 'manage_options', 'submenu_slug', function(){
		include_once 'estate/salse.php';
	} );
}


?>
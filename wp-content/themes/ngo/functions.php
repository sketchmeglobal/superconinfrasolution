<?php 
 register_nav_menus(
    array('primary-menu'=>'Head Menu')
 );
 add_theme_support('post-thumbnails');
 

 function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link  fw-bold me-4"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu dropdown-menu" aria-labelledby="navbarDropdownMenuLink" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 

 ?>
 

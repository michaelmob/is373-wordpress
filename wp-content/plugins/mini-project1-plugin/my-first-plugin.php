<?php
/*
Plugin Name: IS373 Mini-Project1
Plugin URI:
Description:
Author: RichardFebres
Author URI:
Version: 1.0
*/
add_action("admin_menu", "addMenu");
function addMenu()
{
	add_menu_page("Whitelist", "whiteList", 4, "whitelist-options", "exampleMenu" );
	add_submenu_page("New Directory", "Hello", "new-directory-options", 4, "new-directory-menu", "subMenu");
}
function exampleMenu()
{
	echo <<< 'EOD'
  <h2> To Be Announced</h2>

EOD;
}
function subMenu()
{
	echo "Hello World!";
}
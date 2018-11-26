<?php
/*
Plugin Name:  Concerts Custom Post
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      20160911
Author:       WordPress.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/

/*
Concerts Custom Post is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Concerts Custom Post is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Concerts Custom Post. If not, see {URI to Plugin License}.
*/

function my_custom_posttypes() {
    $args = array(
        'public' => true,
        'label' => 'Concerts'
    );
    register_post_type( 'concerts', $args);
 
}
add_action ( 'init', 'my_custom_posttypes' );


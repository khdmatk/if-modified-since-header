<?php
/**
 * Plugin Name: If Modified Since Header
 * Plugin URI: https://www.isaumya.com/#/portfolio/if-modified-since-header-wordpress/
 * Description: This is a simple plugin to sent 304 If Modified Since to the HTTP header. So that the search engines can understand whether your contents has been recently updated and to crawl it again.
 * Author: Saumya Majumder
 * Author URI: https://www.isaumya.com
 * Version: 1.2.1
 * License: GPL2+
 * Text Domain: if-modified-header
 */
 /*  Copyright Saumya Majumder

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/* Do Not Change Anything here */
add_action('template_redirect', 'cyb_add_last_modified_header');
function cyb_add_last_modified_header($headers) {

    //Check if we are in a single post of any type (archive pages has not modified date)
    if( is_singular() ) {
        $post_id = get_queried_object_id();
        if( $post_id ) {
            header("Last-Modified: " . get_the_modified_time("D, d M Y H:i:s", $post_id) );
        }
    }

}
?>
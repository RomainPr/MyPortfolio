<?php

// vignettes
add_theme_support('post-thumbnails');

// menus
register_nav_menu('principal', 'Menu Principal');

// ajout de classes personnalisées sur les liens du wp_nav_menu
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll hvr-underline-from-left"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

remove_action("wp_head", "wp_generator");

add_filter('login_errors',create_function('$a', "return null;"));

define('DISALLOW_FILE_EDIT',true);

// Faire apparaitre le title des images inserees via l'editeur et celles crees en tant que featured 
function inserted_image_titles( $html, $id ) {
	$attachment = get_post($id);
	$thetitle = $attachment->post_title;
	return str_replace('<img', '<img title="' . $thetitle . '" '  , $html);
}
add_filter( 'media_send_to_editor', 'inserted_image_titles', 15, 2 );
function featured_image_titles($attr, $attachment = null){
	$attr['title'] = get_post($attachment->ID)->post_title;
	return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'featured_image_titles', 10, 2);

class mono_walker extends Walker_Nav_Menu{
 function start_el(&$output, $item, $depth, $args){
  global $wp_query;
  $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
  $class_names = $value = '';
  $classes = empty( $item->classes ) ? array() : (array) $item->classes;
  
  $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
  $class_names = ' class="'. esc_attr( $class_names ) . '"';
  
  $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
  
  $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
  $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
  $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
  
  
  $parsedURL = parse_url( esc_attr( $item->url ));
  $cleanURL = substr_replace($parsedURL['path'],'',-1);//remove last '/';
  
  $pathTab = explode('/RP/',$cleanURL);
  $pathTab[sizeof($pathTab)-1] = '#'.$pathTab[sizeof($pathTab)-1];
  $path = implode('/',$pathTab );
  
  $attributes .= ! empty( $item->url )        ? ' href="'   . $path .'"' : '';
  $attributes .= ! empty( $item->url )        ? ' data-title="'   .   sanitize_title($item->title) .'"' : '';
  $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
  
  if($depth != 0) $description = "";
  
  $item_output = $args->before;
  $item_output .= '<a'. $attributes .'>';
  $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
  $item_output .= $description.$args->link_after;
  $item_output .= '</a>';
  $item_output .= $args->after;
  
  $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
 }
}
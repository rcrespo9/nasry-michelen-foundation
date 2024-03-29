<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public static function breadcrumbs() {
      if ( function_exists('yoast_breadcrumb') ) {
        return yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }      
    }
    public static function responsive_bg_img($in_img_id, $in_img_size = 'full', $in_bg_class = '.has-bg-img') {
      $img_srcset = wp_get_attachment_image_srcset( $in_img_id, 'full' );

      $sizes = explode( ", ", $img_srcset );
      $full_size = array_shift($sizes);
      $sizes[] = $full_size; // put full size towards end of array so foreach can work as expected

      $css = '';
      $prev_size_px = null;

      foreach( $sizes as $size ) {
        // Split up the size string, into an array with [0]=>img_url, [1]=>size
        $split = explode( " ", $size );
        if( !isset( $split[0], $split[1] ) )
          continue;

        $background_css = $in_bg_class . ' {
          background-image: url(' . esc_url( $split[0] ) . ')
        }';
       
        // Grab the previous image size as the min-width and/or add the background css to the main css string
        if( isset($prev_size_px) ) {
          $css .= '@media only screen and (min-width: ' . $prev_size_px . ') {';
          $css .= $background_css;
          $css .= "}\n";
        } else {
          $css .= $background_css;
        }

        // Set the current image size as the "previous image" size, for use with media queries
        $prev_size_px = str_replace( "w", "px", $split[1] );
      }
      // The final css, wrapped in a <style> tag
      $css = !empty( $css ) ? '<style>' . $css . '</style>' : '';
      
      if (isset($in_img_id)) {
        return $css;
      }      
    }
}

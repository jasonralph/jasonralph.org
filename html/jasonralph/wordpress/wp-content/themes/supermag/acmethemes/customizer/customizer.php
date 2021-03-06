<?php
/**
 * SuperMag Theme Customizer.
 *
 * @package AcmeThemes
 * @subpackage Supermag
 */

/*
* file for customizer core functions
*/
$supermag_custom_controls_file_path = supermag_file_directory('acmethemes/customizer/customizer-core.php');
require $supermag_custom_controls_file_path;

/*
* file for customizer sanitization functions
*/
$supermag_sanitize_functions_file_path = supermag_file_directory('acmethemes/customizer/sanitize-functions.php');
require $supermag_sanitize_functions_file_path;

/**
 * Adding different options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function supermag_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    /*saved options*/
    $options  = supermag_get_theme_options();

    /*defaults options*/
    $defaults = supermag_get_default_theme_options();

    /*
    * file for customizer custom controls classes
    */
    $supermag_custom_controls_file_path = supermag_file_directory('acmethemes/customizer/custom-controls.php');
    require $supermag_custom_controls_file_path;

    /*
     * file for feature panel of home page
     */
    $supermag_customizer_feature_option_file_path = supermag_file_directory('acmethemes/customizer/feature-section/feature-panel.php');
    require $supermag_customizer_feature_option_file_path;

    /*
    * file for header panel
    */
    $supermag_customizer_header_options_file_path = supermag_file_directory('acmethemes/customizer/header-options/header-panel.php');
    require $supermag_customizer_header_options_file_path;

    /*
    * file for customizer footer section
    */
    $supermag_customizer_footer_options_file_path = supermag_file_directory('acmethemes/customizer/footer-section/footer-section.php');
    require $supermag_customizer_footer_options_file_path;

    /*
    * file for design/layout panel
    */
    $supermag_customizer_design_options_file_path = supermag_file_directory('acmethemes/customizer/design-options/design-panel.php');
    require $supermag_customizer_design_options_file_path;

    /*
    * file for single post sections
    */
    $supermag_customizer_single_post_section_file_path = supermag_file_directory('acmethemes/customizer/single-posts/single-post-section.php');
    require $supermag_customizer_single_post_section_file_path;

    /*
     * file for options panel
     */
    $supermag_customizer_options_panel_file_path = supermag_file_directory('acmethemes/customizer/options/options-panel.php');
    require $supermag_customizer_options_panel_file_path;

    /*
  * file for options reset
  */
    $supermag_customizer_options_reset_file_path = supermag_file_directory('acmethemes/customizer/options/options-reset.php');
    require $supermag_customizer_options_reset_file_path;

    /*removing*/
    $wp_customize->remove_panel('header_image');
    $wp_customize->remove_control('header_textcolor');
}
add_action( 'customize_register', 'supermag_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function supermag_customize_preview_js() {
    wp_enqueue_script( 'supermag-customizer', get_template_directory_uri() . '/acmethemes/core/js/customizer.js', array( 'customize-preview' ), '1.1.0', true );
}
add_action( 'customize_preview_init', 'supermag_customize_preview_js' );

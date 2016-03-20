<?php
/**
 * ving Theme Customizer.
 *
 * @package ving
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ving_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_control( 'header_textcolor' )->priority  = 10;
	
	$wp_customize->add_setting(
		'ving-desc',
		array(
			'default'	=> '000000',
			'sanitize_callback'	=> 'sanitize_hex_color'
		)
	);
	
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'ving-desc',
	        array(
	            'label' => __('Site Description Color', 'ving'),
	            'section' => 'colors',
	            'settings' => 'ving-desc',
	            'priority'	=> 1,
	        )
	    )
	);
	
	$wp_customize-> add_section(
		'ving_layout',
		array(
			'title'		=> __('Layout Settings', 'ving'),
			'priority'	=> 5,
		)
	);
	
	$wp_customize-> add_setting(
		'ving_featured_thumb',
		array(
			'default'			=> true,
			'sanitize_callback'	=> 'ving_sanitize_checkbox',
		)
	);
	
	$wp_customize-> add_control(
		'ving_featured_thumb',
		array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Show Featured Image in the Posts', 'ving'),
    	'section'	=> 'ving_layout',
    	)
	);
	
	$wp_customize-> add_setting(
		'ving-sidebar',
		array(
			'default'			=> 'right',
			'sanitize_callback'	=> 'ving_sanitize_select'
			
		)
	);
	
	$wp_customize->add_control(
	    'ving-sidebar',
	    array(
	        'type' => 'radio',
	        'label' => __('Sidebar Layout', 'ving'),
	        'description'	=> __('Select the sidebar orientation for the site', 'ving'),
	        'section' => 'ving_layout',
	        'choices' => array(
	            'left' => 'Left',
	            'right' => 'Right',
	        ),
	    )
	);

$wp_customize-> add_section(
    'ving_social',
    array(
    	'title'			=> __('Social Settings', 'ving'),
    	'description'	=> __('Manage the Social Icon Setings of your site.', 'ving'),
    	'priority'		=> 10,
    	)
    );
    
    $wp_customize-> add_setting(
    'social',
    array(
    	'default'			=> false,
    	'sanitize_callback'	=> 'ving_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'social',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Enable Social Icons', 'ving'),
    	'section'	=> 'ving_social',
    	'priority'	=> 1,
    	)
    );

    $wp_customize-> add_setting(
    'facebook',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'facebook',
    array(
    	'label'		=> __('Facebook URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 3
    	)
    );
    
    $wp_customize-> add_setting(
    'twitter',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'twitter',
    array(
    	'label'		=> __('Twitter URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 4
    	)
    );
    
    $wp_customize-> add_setting(
    'google-plus',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'google-plus',
    array(
    	'label'		=> __('Google Plus URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 5
    	)
    );
    
    $wp_customize-> add_setting(
    'instagram',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'instagram',
    array(
    	'label'		=> __('Instagram URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 6
    	)
    );
    
    $wp_customize-> add_setting(
    'pinterest-p',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'pinterest-p',
    array(
    	'label'		=> __('Pinterest URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 7
    	)
    );
    
    $wp_customize-> add_setting(
    'youtube',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'youtube',
    array(
    	'label'		=> __('Youtube URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 8
    	)
    );
    
    $wp_customize-> add_setting(
    'linkedin',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'linkedin',
    array(
    	'label'		=> __('Linked-In URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 9
    	)
    );

    
    $wp_customize-> add_setting(
    'vimeo-square',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'vimeo-square',
    array(
    	'label'		=> __('Vimeo URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 10
    	)
    );
    
    $wp_customize-> add_setting(
    'envelope-o',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'envelope-o',
    array(
    	'label'		=> __('Your E-Mail Info','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 11
    	)
    );
    
    $wp_customize-> add_setting(
    'tumblr',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'tumblr',
    array(
    	'label'		=> __('Tumblr URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 12
    	)
    );
    
    $wp_customize-> add_setting(
    'stumbleupon',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'stumbleupon',
    array(
    	'label'		=> __('StumbleUpon URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 13
    	)
    );
    
    $wp_customize-> add_setting(
    'reddit',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'reddit',
    array(
    	'label'		=> __('Reddit URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 14
    	)
    );
    
    $wp_customize-> add_setting(
    'vine',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'vine',
    array(
    	'label'		=> __('Vine URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 15
    	)
    );
    
    $wp_customize-> add_setting(
    'soundcloud',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'soundcloud',
    array(
    	'label'		=> __('SoundCloud URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 16
    	)
    );
    
    $wp_customize-> add_setting(
    'yelp',
    array(
    	'default'	=> '',
    	'sanitize_callback' => 'esc_url_raw',
    	)
    );
    
    $wp_customize-> add_control(
    'yelp',
    array(
    	'label'		=> __('Yelp URL','ving'),
    	'section'	=> 'ving_social',
    	'type'		=> 'text',
        'priority'   => 17
    	)
    );
    
    //*----Featured Posts Section----*//


class ving_Featured_Post_Control extends WP_Customize_Control
{
    private $posts = false;
    public function __construct($manager, $id, $args = array(), $options = array())
    {
        $postargs = wp_parse_args($options, array('numberposts' => '-1'));
        $this->posts = get_posts($postargs);
        parent::__construct( $manager, $id, $args );
    }
    /**
    * Render the content on the theme customizer page
    */
    public function render_content()
    {
        if(!empty($this->posts))
        {
            ?>
                <label>
                    <span class="customize-post-dropdown"><?php echo esc_html( $this->label ); ?></span>
                    <select <?php $this->link(); ?>>
                    <?php
                        foreach ( $this->posts as $post )
                        {
                            printf('<option value="%s" %s>%s</option>', $post->ID, selected($this->value(), $post->ID, false), $post->post_title);
                        }
                    ?>
                    </select>
                </label>
            <?php
        }
    }
}

	$wp_customize-> add_panel(
	    'ving-featured-post', 
		    array(
			    'priority'       => 12,
			    'capability'     => 'edit_theme_options',
			    'theme_supports' => '',
			    'title'          => __('Featured Posts Area', 'ving'),
			    'description'    => '',
		    )
    );
    
    $wp_customize-> add_section(
	    'ving-fp-enable',
	    array(
	    	'title'		=> __('Enable Featured Posts','ving'),
	    	'panel'		=> 'ving-featured-post',
	    	'priority'	=> 15
	    )
    );
    
    $wp_customize-> add_setting(
    'ving-fp-enable',
    array(
	    'default'			=> false,
    	'sanitize_callback'	=> 'ving_sanitize_checkbox',
    	)
    );
    
    $wp_customize-> add_control(
    'ving-fp-enable',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Enable the Featured Posts Area','ving'),
    	'section'	=> 'ving-fp-enable',
    	'priority'	=> 1,
    	)
    );
    
    $wp_customize-> add_section(
    	'ving-fp-select',
    	array(
    		'title'		=> __('Choose your featured Posts','ving'),
    		'panel'		=> 'ving-featured-post',
    		'priority'	=> 20
    	)
    );
    
    $wp_customize-> add_setting(
    	'ving-fp-1',
    	array(
    		'default'	=> '',
    		'sanitization_callback'	=> 'absint'
    	)
    );
    
    $wp_customize-> add_control(
    	new ving_Featured_Post_Control(
    	$wp_customize,
	    	'ving-fp-1',
	    	array(
	    		'label'		=> __('Post 1','ving'),
	    		'section'	=> 'ving-fp-select',
	    		'settings'	=> 'ving-fp-1'
	    	)
    	)
    );
    
    $wp_customize-> add_setting(
    	'ving-fp-2',
    	array(
    		'default'	=> '',
    		'sanitize_callback'	=> 'absint',
    		'transport'	=> 'refresh'
    	)
    );
    
    $wp_customize-> add_control(
    	new ving_Featured_Post_Control(
    	$wp_customize,
	    	'ving-fp-2',
	    	array(
	    		'label'		=> __('Post 2','ving'),
	    		'section'	=> 'ving-fp-select',
	    		'settings'	=> 'ving-fp-2'
	    	)
    	)
    );
    
    $wp_customize-> add_setting(
    	'ving-fp-3',
    	array(
    		'default'	=> '',
    		'sanitize_callback'	=> 'absint',
    		'transport'	=> 'refresh'
    	)
    );
    
    $wp_customize-> add_control(
    	new ving_Featured_Post_Control(
    	$wp_customize,
	    	'ving-fp-3',
	    	array(
	    		'label'		=> __('Post 3','ving'),
	    		'section'	=> 'ving-fp-select',
	    		'settings'	=> 'ving-fp-3'
	    	)
    	)
    );
    
     //---- Custom Settings ----//
    
     class Custom_CSS_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="8" style="width:100%;background: black; color: white;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}
	class TextBox_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="8" style="width:100%;background: white; color: black;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}

	$wp_customize-> add_section(
    'custom_set',
    array(
    	'title'			=> __('Custom Settings','ving'),
    	'description'	=> __('Add some custom CSS code to edit your theme.','ving'),
    	'priority'		=> 17,
    	)
    );
    
	$wp_customize->add_setting(
	'css',
	array(
		'default'		=> '',
		'sanitize_callback'	=> 'ving_sanitize_text'
		)
	);
 
	$wp_customize->add_control(
	    new Custom_CSS_Control(
	        $wp_customize,
	        'css',
	        array(
	            'label' => __('Custom CSS','ving'),
	            'section' => 'custom_set',
	            'settings' => 'css'
	        )
	    )
	);
	
	//---- Pro Settings ----//
	
	$wp_customize-> add_section(
    'ving_pro',
    array(
    	'title'			=> __('Upgrade to Pro','ving'),
    	'description'	=> __('You can now upgrade to Ving Plus and unlock the abundant potential of the theme with some amazing and useful features such as <br><br><b>Multiple Layouts</b><br><br><b>Featured Slider</b><br><br><b>WooCommerce Readiness</b><br><br><b>High Flexibility</b><br><br><b>Custom Fields</b><br><br>and much more.<br><br>Check the theme out for yourself <a href="http://www.divjot.co/product/ving-plus">here</a>.','ving'),
    	'priority'		=> 21,
    	)
    );
    
    class MyCustom_Customize_Control extends WP_Customize_Control {    
	    public function render_content() {
	        ?>
	        <label>
						<input type="checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?> />
						<?php echo esc_html( $this->label ); ?>
						<?php if ( ! empty( $this->description ) ) : ?>
							<span class="description customize-control-description"><?php echo $this->description; ?></span>
						<?php endif; ?>
					</label>
					
					<script>
					jQuery(function($){
						/* $('#customize-control-pro_hide' ).show(); */
						/*
wp.customize( 'pro_hide', function( value ) {
							value.bind( function( to ) {
*/
								$( '#customize-control-pro_hide' ).hide();
								$( '#accordion-section-ving_pro #accordion-section-title' ).css({"color":"#fff"});
							/*
} );
						} );
*/						
					});
					</script>

					
	        <?php
	    }
	}
    
    $wp_customize->add_setting(
	'pro_hide',
	array(
		'default'			=> false,
		'sanitize_callback'	=> 'ving_sanitize_checkbox',
		)
	);
 
	$wp_customize-> add_control( new MyCustom_Customize_Control( $wp_customize,
    'pro_hide',
    array(
    	'type'		=> 'checkbox',
    	'label'		=> __('Hide this section forever.','ving'),
    	'section'	=> 'ving_pro',
    	'priority'	=> 1,
    	)
    ));
    
    function ving_sanitize_text( $t ) {
    	return wp_kses_post( force_balance_tags( $t ) );
    }
    
    function ving_sanitize_checkbox( $i ) {
	    if ( $i == 1 ) {
	        return 1;
	    } 
	    else {
	        return '';
	    }
	 }
	 
	function ving_sanitize_select( $input ) {
	    $valid = array(
	        'left'  => 'Left',
	        'right' => 'Right',
	    );
	 
	    if ( array_key_exists( $input, $valid ) ) {
	        return $input;
	    } else {
	        return '';
	    }
	}
 }   
add_action( 'customize_register', 'ving_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ving_customize_preview_js() {
	wp_enqueue_script( 'ving_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'ving_customize_preview_js' );

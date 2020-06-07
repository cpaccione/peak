<?php

/*

@package Motion

	=====================
	ACF BLOCK SUPPORT
	=====================
*/

function register_acf_block_types() {

    // register a standard hero block
    acf_register_block_type(array(
        'name'              => 'peak_standard_hero',
        'title'             => __('Peak Standard Hero'),
        'description'       => __('A block used to display title block'),
        'render_template'   => 'template-parts/blocks/standard_hero/standard-hero.php',
        'enqueue_assets'    => function() {
            wp_enqueue_style( 'peak-title', get_template_directory_uri() . '/template-parts/blocks/standard_hero/standard-hero.css', array(), '1.0', 'all' );
        },
        'category'          => 'common',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#00A1ED',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'Peak', 'Standard', 'Hero' ),
        
    ));

        // register a max width 700 block
        acf_register_block_type(array(
            'name'              => 'peak_max_width_700',
            'title'             => __('Peak Max Width 700'),
            'description'       => __('This block displays a container with a max-width of 700px centered.'),
            'render_template'   => 'template-parts/blocks/max-width-seven/max-width-seven.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'max-width-seven', get_template_directory_uri() . '/template-parts/blocks/max-width-seven/max-width-seven.css', array(), '1.0', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
              ),
            'keywords'          => array( 'Peak', 'Max-Width', '700' ),
            
        ));

        // register a two column block
        acf_register_block_type(array(
            'name'              => 'two_column_block',
            'title'             => __('Two Column Block'),
            'description'       => __('This block displays two columns with an image on the right and text on the left.'),
            'render_template'   => 'template-parts/blocks/two_columns/two_columns.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'two_column_block', get_template_directory_uri() . '/template-parts/blocks/two_columns/two_columns.css', array(), '1.1', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'Two Columns' ),
            
        ));

        // register a two column block
        acf_register_block_type(array(
            'name'              => 'hero_with_image',
            'title'             => __('Hero with image'),
            'description'       => __('The block displays text in hero with a background image on the right.'),
            'render_template'   => 'template-parts/blocks/hero_with_image/hero_with_image.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'hero_with_image', get_template_directory_uri() . '/template-parts/blocks/hero_with_image/hero_with_image.css', array(), '1.1', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'Hero with image' ),
            
        ));

        // register appliance repeater
        acf_register_block_type(array(
            'name'              => 'appliance_repeater',
            'title'             => __('Appliance Repeater'),
            'description'       => __('The block adds a Section title, sub-title, appliance icons and a call to action.'),
            'render_template'   => 'template-parts/blocks/appliance_repeater/appliance_repeater.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'appliance-repeater', get_template_directory_uri() . '/template-parts/blocks/appliance_repeater/appliance_repeater.css', array(), '1.1', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'Appliances', 'Icons' ),
            
        ));

        // register pricing block
        acf_register_block_type(array(
            'name'              => 'pricing',
            'title'             => __('Pricing'),
            'description'       => __('This block adds a pricing block with two images.'),
            'render_template'   => 'template-parts/blocks/pricing/pricing.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'pricing-block', get_template_directory_uri() . '/template-parts/blocks/pricing/pricing.css', array(), '1.0', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'Pricing' ),
            
        ));

        // register CTA block
        acf_register_block_type(array(
            'name'              => 'cta_block',
            'title'             => __('CTA'),
            'description'       => __('This block adds a CTA with title, text, and button.'),
            'render_template'   => '/template-parts/blocks/cta_block/cta_block.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'cta-block', get_template_directory_uri() . '/template-parts/blocks/cta_block/cta_block.css', array(), '1.0', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'CTA' ),
            
        ));

        // register Col Alt
        acf_register_block_type(array(
            'name'              => 'col_alt',
            'title'             => __('Col Alt'),
            'description'       => __('This block adds two rows of columns with alternating images.'),
            'render_template'   => 'template-parts/blocks/col_alt/col_alt.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'col-alt', get_template_directory_uri() . '/template-parts/blocks/col_alt/col_alt.css', array(), '1.0', 'all' );
            },
            'category'          => 'common',
            'post_types'        => array('page'),
            // 'icon'              => 'admin-comments',
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
                ),
            'keywords'          => array( 'Peak', 'Column', 'Alt' ),
            
        ));

        // Registering Quote block for slick slider
        acf_register_block_type(array(
            'name'              => 'quote_slider',
            'title'             =>  __('Quote Slider'),
            'description'       =>  __('The block adds a quote slider.'),
            'render_template'   =>  'template-parts/blocks/sliders/quote_slider/quote_slider.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'quote-slider-slick', get_template_directory_uri() . '/slick-1.8.1/slick/slick.css', array(), '1.0' );

                wp_enqueue_style( 'quote-slider-slick-theme', get_template_directory_uri() . '/slick-1.8.1/slick/slick-theme.css', array(), '1.0' );

                wp_enqueue_style( 'test-slider-styles', get_template_directory_uri() . '/template-parts/blocks/sliders/quote_slider/quote_slider.css', array(), '1.0' );

                wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick-1.8.1/slick/slick.js', array('jquery'), '1.0', true ); 

                wp_enqueue_script( 'quote-slider-js', get_template_directory_uri() . '/template-parts/blocks/sliders/quote_slider/quote_slider.js', array('jquery'), '1.0', true );
            },
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#00A1ED',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'screenoptions',
              ),
            'keywords'          => array( 'peak', 'slider', 'quote' ),

        ));
}

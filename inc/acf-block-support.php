<?php

/*

@package Motion

	=====================
	ACF BLOCK SUPPORT
	=====================
*/

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'motion_hero',
        'title'             => __('Motion Hero'),
        'description'       => __('A block used to typically at the top of a page'),
        'render_template'   => 'template-parts/blocks/hero/motion-hero.php',
        'category'          => 'common',
        'post_types'        => array('page'),
        // 'icon'              => 'admin-comments',
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#FA1058',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'motion', 'hero' ),
        
    ));

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'motion_map',
        'title'             => __('Motion Map'),
        'description'       => __('A full width Google Map'),
        'render_template'   => 'template-parts/blocks/section/motion-map.php',
        'category'          => 'common',
        'post_types'        => array('page'), 
        'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#FA1058',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#ffffff',
            // Specifying a dashicon for the block
            'src' => 'admin-comments',
          ),
        'keywords'          => array( 'motion', 'google', 'map' ), 
    ));

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'motion_contact',
            'title'             => __('Motion Contact Form'),
            'description'       => __('Motion Contact Form Section'),
            'render_template'   => 'template-parts/blocks/section/motion-contact.php',
            'category'          => 'common',
            'post_types'        => array('page'),   
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
              ),
            'keywords'          => array( 'motion', 'contact', 'contact form' ), 
        ));
        
        acf_register_block_type(array(
            'name'              => 'case_study_hero',
            'title'             =>  __('Case Study Hero'),
            'description'       =>  __('Displays a hero with title and categories'),
            'render_template'   =>  'template-parts/blocks/hero/motion-cs-hero.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/case.css',
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
              ),
            'keywords'          => array( 'motion', 'case study', 'hero' ),

        ));

        acf_register_block_type(array(
            'name'              => 'case_study_ask_solution',
            'title'             =>  __('Case Study Ask/Solution'),
            'description'       =>  __('Displays the ask and solution'),
            'render_template'   =>  'template-parts/blocks/hero/motion-ask-solution.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/case.css',
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
              ),
            'keywords'          => array( 'motion', 'case study', 'ask', 'solution' ),

        ));

        acf_register_block_type(array(
            'name'              => 'case_study_relate_work',
            'title'             =>  __('Case Study Related Work'),
            'description'       =>  __('Displays related work'),
            'render_template'   =>  'template-parts/blocks/section/motion-related-work.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/case.css',
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'admin-comments',
              ),
            'keywords'          => array( 'motion', 'case study', 'related', 'work' ),

        ));

        acf_register_block_type(array(
            'name'              => 'case_study_two_image',
            'title'             =>  __('Case Study Two Column Images'),
            'description'       =>  __('Displays two images side by side.'),
            'render_template'   =>  'template-parts/blocks/section/motion-two-column-image.php',
            'enqueue_style'     => get_template_directory_uri() . '/css/case.css', '1.0.0',
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),

            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'screenoptions',
              ),
            'keywords'          => array( 'motion', 'case study', 'images', 'columns' ),

        ));

        acf_register_block_type(array(
            'name'              => 'case_study_bg_image',
            'title'             =>  __('Case Study background with image'),
            'description'       =>  __('The block allows a background image with inline image.'),
            'render_template'   =>  'template-parts/blocks/section/background-with-image/motion-bg.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'block-cs-bg-image', get_template_directory_uri() . '/template-parts/blocks/section/background-with-image/bg.css', array(), '1.0' );
            },
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),

            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'screenoptions',
              ),
            'keywords'          => array( 'motion', 'case study', 'images', 'background image' ),
        ));

        acf_register_block_type(array(
            'name'              => 'case_study_slider',
            'title'             =>  __('Content Slider'),
            'description'       =>  __('The block adds a slider.'),
            'render_template'   =>  'template-parts/blocks/section/slider/motion-slider.php',
            'enqueue_assets'    => function() {
                wp_enqueue_style( 'block-slider-slick', get_template_directory_uri() . '/third_party_plugins/slick-1.8.1/slick/slick.css', array(), '1.0' );

                wp_enqueue_style( 'block-slider-slick-theme', get_template_directory_uri() . '/third_party_plugins/slick-1.8.1/slick/slick-theme.css', array(), '1.0' );

                wp_enqueue_style( 'block-slider-styles', get_template_directory_uri() . '/template-parts/blocks/section/slider/slider.css', array(), '1.0' );

                wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/third_party_plugins/slick-1.8.1/slick/slick.js', array('jquery'), '1.0', true ); 

                wp_enqueue_script( 'block-slider-js', get_template_directory_uri() . '/template-parts/blocks/section/slider/slick-custom.js', array('jquery'), '7.7', true );
            },
            'category'          =>  __('layout'),
            'mode'              => 'auto',
            'post_types'        => array('page'),
            'icon' => array(
                // Specifying a background color to appear with the icon e.g.: in the inserter.
                'background' => '#FA1058',
                // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                'foreground' => '#ffffff',
                // Specifying a dashicon for the block
                'src' => 'screenoptions',
              ),
            'keywords'          => array( 'motion', 'slider', ),

        ));

        acf_register_block_type(array(
          'name'              => 'landing_page_hero',
          'title'             =>  __('Landing Page Hero'),
          'description'       =>  __('The block adds a hero section that only displays text.'),
          'render_template'   =>  'template-parts/blocks/healthcare/hero/hc-hero.php',
          'enqueue_assets'    => function() {
              wp_enqueue_style( 'health-care-hero', get_template_directory_uri() . '/template-parts/blocks/healthcare/hero/hc-hero.php', array(), '1.0' );

              wp_enqueue_style( 'health-care-styles', get_template_directory_uri() . '/template-parts/blocks/healthcare/hero/hc-hero.css', array(), '1.0' );

          },
          'category'          =>  __('layout'),
          'mode'              => 'auto',
          'post_types'        => array('page'),
          'icon' => array(
              // Specifying a background color to appear with the icon e.g.: in the inserter.
              'background' => '#FA1058',
              // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
              'foreground' => '#ffffff',
              // Specifying a dashicon for the block
              'src' => 'screenoptions',
            ),
          'keywords'          => array( 'motion', 'hero', 'landinge page' ),

      ));

}

<?php

/**
 * Appliance Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'appliance-repeater-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'appliance-repeater';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('appliance_title');
$sub_title = get_field('appliance_sub_title');
$text_color = get_field('');
$link = get_field('link');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div class="home-services">
        <div class="container-1000">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $sub_title; ?></p>

            <div class="service-grid">

                <div class="icon-wrap">
                    <a id="contact-modal" href="javascript:;">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Water Heater</p>
                    </a>
                </div>
            </div>

            <?php if( have_rows('repeater_field_name') ): ?>

                <div class="service-grid">

                <?php while( have_rows('repeater_field_name') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');

                    ?>

                    <li class="slide">

                        <?php if( $link ): ?>
                            <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                        <?php if( $link ): ?>
                            </a>
                        <?php endif; ?>

                        <?php echo $content; ?>

                    </li>

                    <div class="icon-wrap">
                        <a id="contact-modal" href="javascript:;">
                        <div class="icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                        </div>
                        <p>Water Heater</p>
                        </a>
                    </div>

                <?php endwhile; ?>

                </div>

            <?php endif; ?>


            <?php 

            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

            <?php endif; ?>

        </div>
    </div>
</div>
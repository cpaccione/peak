<?php

/**
 * Quote Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonials';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container-1000">

        <?php if( have_rows('testimonial_repeater') ): ?>

            <div class="testimonial-slider">

            <?php while( have_rows('testimonial_repeater') ): the_row(); 

                // vars
                $quote = get_sub_field('quote');
                $source = get_sub_field('source');

                ?>

                <div>
                    <div class="test-wrap">
                        <h2><?php echo $quote; ?></h2>
                        <p>- <?php echo $source; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>
</div>






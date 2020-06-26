<?php

/**
 * Standard Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'brands-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'brands';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <?php if( have_rows('logo_repeater') ): ?>

        <?php while( have_rows('logo_repeater') ): the_row(); 

            // vars
            $logo = get_sub_field('logo');
            
            ?>

            <div class="col">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
</div>
<?php

/**
 * Form Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'form-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Load values and assign defaults.
$image = get_field('image');
$hours = get_field('hours');
$phone = get_field('phone');
$location = get_field('location');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="contact-info">
        <img src="<?php echo $image['url']; ?>" alt="Peak Heating Cooling Refrigeration">
        <ul>
            <li><span>Hours:</span></li>
            <li><?php echo $hours; ?></li>
        </ul>
        <ul>
            <li><span>Phone:</span></li>
            <li><?php echo $phone; ?></li>
        </ul>

        <ul>
            <li><span>Location:</span></li>
            <li><?php echo $location; ?></li>
        </ul>
    </div>
</div>
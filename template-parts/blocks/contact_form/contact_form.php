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
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Load values and assign defaults.
$title = get_field('title');
$subtitle = get_field('subtitle');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div id="form">
        <?php if ($title) { ?>
            <h1><?php echo $title; ?></h1>
            <hr />
        <?php } ?>
        <p><?php echo $subtitle; ?></p>
        <?php echo do_shortcode('[contact-form-7 id="212" title="Contact Form"]') ?>
    </div>
</div>
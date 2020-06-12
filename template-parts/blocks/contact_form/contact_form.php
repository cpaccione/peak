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

// Create class attribute allowing for custom "className" and "align" values.
$className = 'form-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('home_title');
$sub_head = get_field('home_subhead');
$bg = get_field('hero_background_image');
$plink = get_field('phone_link');
$plabel = get_field('phone_label');

?>
<div class="container">
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div class="col">
            <div class="form">
                <p>Fill out the form below and we will contact you within XX hours.</p>
                <?php the_field('form'); ?>
            </div>
        </div>
        <div class="col">
            <div class="contact-info">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/peak-contact-logo.svg" alt="Peak Heating Cooling Refrigeration">
                <ul>
                    <li><span>Hours:</span></li>
                    <li>Monday - Saturday 8 am - 9 pm</li>
                    <li>Sundays 8 am - 3 pm</li>
                </ul>
                <ul>
                    <li><span>Phone:</span></li>
                    <li>847-510-8302</li>
                </ul>

                <ul>
                    <li><span>Location:</span></li>
                    <li>Chicago, IL</li>
                </ul>
            </div>
        </div>
    </div>
</div>
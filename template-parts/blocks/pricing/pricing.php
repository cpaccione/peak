<?php

/**
 * Pricing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pricing-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'pricing';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$col_one_image = get_field('col_one_image');
$col_one_title = get_field('col_one_title');
$col_one_sub_title = get_field('col_one_sub_title');
$col_one_list_one = get_field('col_one_list_one');
$col_one_list_two = get_field('col_one_list_two');
$col_one_list_three = get_field('col_one_list_three');
$col_two_image = get_field('col_two_image');
$col_two_sub_title = get_field('col_two_sub_title');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="pricing-wrap">
        <div class="col">
            <img style="display: inline-block;" src="<?php echo $col_one_image['url']; ?>" alt="<?php echo $col_one_image['alt']; ?>">
        </div>
        <div class="col">
            <h2><?php echo $col_one_title; ?></h2>
            <p><?php echo $col_one_sub_title; ?></p>
            <ul>
                <li><?php echo $col_one_list_one; ?></li>
                <li><?php echo $col_one_list_two; ?></li>
                <li><?php echo $col_one_list_three; ?></li>
            </ul>
        </div>
    </div>
    <div class="line"></div>
    <div class="pricing-wrap">
        <div class="col">
            <img style="display: inline-block;" src="<?php echo $col_two_image['url']; ?>" alt="<?php echo $col_two_image['alt']; ?>">
        </div>
        <div class="col">
            <p><?php echo $col_two_sub_title; ?></p>
        </div>
    </div>
</div>
<?php

/**
 * Hero with Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero';
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
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image: url('<?php echo $bg; ?>');">
    <div class="container-1000">

        <div class="wrap">
            <h2><?php echo $title; ?></h2>
            <h1><?php echo $sub_head; ?></h1>

            <?php 
                $link = get_field('button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            
            <a class="phone" href="tel:<?php echo $plink; ?>" target="_blank"><?php echo $plabel; ?></a>

        </div>
    </div>
</div>
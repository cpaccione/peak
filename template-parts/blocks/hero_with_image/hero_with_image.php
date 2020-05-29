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
$id = 'hero-with-image-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-with-image';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('hwi-title');
$sub_head = get_field('hwi-sub-head');
$body = get_field('hwi-sub-body');
$bg = get_field('bg-url');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="container-1000">
        <div class="hwi">
            <div class="wrap">

                    <h2><?php echo $title; ?></h2>

                    <p class="sub-head"><?php echo $sub_head; ?></p>

                    <p><?php echo $body; ?></p>

                    <?php 

                    $link = get_field('hwi-link');
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

    <img src="<?php echo $bg['url']; ?>" alt="<?php echo['alt']; ?>">

</div>
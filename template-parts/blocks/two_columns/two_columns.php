<?php

/**
 * Two Columns Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'about-pricing-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-pricing';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$sub = get_field('sub-title');
$img = get_field('image');
$finance = get_field('finance');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="col">
    <div class="wrap">
        <h2><?php echo $title; ?></h2>
            <p><?php echo $sub; ?></p>

            <?php if( have_rows('list_repeater') ): ?>

                <ul>

                <?php while( have_rows('list_repeater') ): the_row(); 

                    // vars
                    $link = get_sub_field('list_item');

                    ?>

                    <li><?php echo $link; ?></li>

                <?php endwhile; ?>

                </ul>

                <?php endif; ?>
            <?php 
            $link = get_field('link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <span class="financing-link"><?php echo $finance; ?></span>
        </div>
    </div>
    <div class="col">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
    </div>
</div>
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
$id = 'two-alt-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'two-alt';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title_one = get_field('title_one');
$editor_one = get_field('editor_one');
$image_one = get_field('image_one');
$link_one = get_field('link_one');
$title_two = get_field('title_two');
$editor_two = get_field('editor_two');
$image_two = get_field('image_two');
$link_two = get_field('link_two');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="col col-1">
        <div class="wrap">
            <h2><?php echo $title_one; ?></h2>
            <span class="editor">
                <?php echo $editor_one; ?>
            </span>
            <?php 
        
            if( $link_one ): 
                $link_one_url = $link_one['url'];
                $link_one_title = $link_one['title'];
                $link_one_target = $link_one['target'] ? $link['target'] : '_self';
            
            ?>

                <a class="button" href="<?php echo esc_url( $link_one_url ); ?>" target="<?php echo esc_attr( $link_one_target ); ?>"><?php echo esc_html( $link_one_title ); ?></a>

            <?php endif; ?>         
        </div>
    </div>
    <div class="col col-2">
        <img src="<?php echo $image_one['url']; ?>" alt="<?php echo $image_one['alt']; ?>">
    </div>
    <div class="col col-3">
        <img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt']; ?>">
    </div>
    <div class="col col-4">
        <div class="wrap">
            <h2><?php echo $title_two; ?></h2>
            <span class="editor">
                <?php echo $editor_two; ?>
            </span>
            <?php 
        
            if( $link_two ): 
                $link_two_url = $link_two['url'];
                $link_two_title = $link_two['title'];
                $link_two_target = $link_two['target'] ? $link_two['target'] : '_self';
            
            ?>

                <a class="button" href="<?php echo esc_url( $link_two_url ); ?>" target="<?php echo esc_attr( $link_two_target ); ?>"><?php echo esc_html( $link_two_title ); ?></a>

            <?php endif; ?>            
        </div>
    </div>
</div>
<?php

/**
 * Main Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'main-hero-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'main-hero';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title');
$sub_head = get_field('sub-head');
$body = get_field('body');
$hero_featured = get_field('hero_featured');
$bg = get_field('background_image');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div id="hero-text-container">
        <div class="container-bg" style="background-image: url('<?php echo $bg; ?>');"></div>
        <div class="container">
            <div class="hero-with-image">
                <div class="hwi">
                    <div class="wrap">
                        <h2><?php echo $title; ?></h2>

                        <p style="font-weight: bold;"><?php echo $sub_head; ?></p>
                        <p><?php echo $body; ?></p>

                        <?php

                        $link = get_field('button');

                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                            <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-featured" style="background-image: url('<?php echo $hero_featured['url']; ?>')" alt="<?php echo $hero_featured['alt']; ?>"></div>
</div>
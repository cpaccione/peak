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
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('home_title');
$sub_head = get_field('home_subhead');
$plink = get_field('phone_link');
$plabel = get_field('phone_label');
$images = get_field('background_images');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php
    // Sort in Reverse
    $rev_images = array_reverse($images);
    // Index for JS
    $index = -1;

    if ($images) :
        foreach ($rev_images as $image) :
            $index++;
    ?>
            <div id="<?php echo $index; ?>" class="hero-background" style="background-image: url('<?php echo $image['image']['url']; ?>');"></div>
    <?php
        endforeach;
    endif;
    ?>

    <div class="container-1000">

        <div class="wrap">
            <h2><?php echo $title; ?></h2>
            <h1><?php echo $sub_head; ?></h1>

            <?php
            $link = get_field('button');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>

            <a class="phone" href="tel:<?php echo $plink; ?>" target="_blank"><?php echo $plabel; ?></a>

        </div>
    </div>
</div>

<script>
    (function() {
        const bgParent = document.querySelector('.home-hero');
        const slides = document.querySelectorAll('.hero-background'); 
        let index = 5;

        if (slides && slides.length > 1) {
            setInterval(() => {
                const slide = document.getElementById(index);

                slide.classList.add('fade-out');

                setTimeout(() => {
                    bgParent.removeChild(slide)
                    bgParent.prepend(slide)
                    slide.classList.remove('fade-out')
                    index--;
                    if (index < 0){
                        index = 5;
                    }
                }, 1000)
            }, 4000)
        }
    })();
</script>
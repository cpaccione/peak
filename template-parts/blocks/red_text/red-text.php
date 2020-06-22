<?php

/**
 * Appliance Repeater Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$copy = get_field('copy');
$link = get_field('link');

?>

<div class="container-1000">
    <div class="appliance-repair">
        <div class="wrap">
            <p>We provide same-day appliance repair service, 24/7 and 365 days a year. We service all of Chicago and its surrounding suburbs.
                <?php
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                <?php endif; ?>
            </p>
        </div>
    </div>
</div>
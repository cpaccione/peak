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
$id = 'home-services-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = $block['className'] === 'wide' ? '' : 'home-services';
if (!empty($block['className'])) {
  $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('appliance_title');
$sub_title = get_field('appliance_sub_title');
$link = get_field('link');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

  <div class="<?php $block['className'] === 'wide' ? '' : 'container-1000' ?>">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $sub_title; ?></p>


    <?php if (have_rows('appliance_repeater')) : ?>

      <div class="service-grid">

        <?php
        $index = -1;
        while (have_rows('appliance_repeater')) : the_row();
          // vars
          $service = get_sub_field('service');
          $image = get_sub_field('image');
          $popup_text = get_sub_field('popup_text');
          $index++;
        ?>

          <div class="icon-wrap modal-button" data-index="<?php echo $index; ?>">
            <div class="icon" data-index="<?php echo $index; ?>">
              <img id="appliance-icon-<?php echo $index; ?>" class="appliance-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-index="<?php echo $index; ?>">
            </div>
            <p id="appliance-icon-title-<?php echo $index; ?>" class="appliance-icon-title" data-index="<?php echo $index; ?>"><?php echo $service; ?></p>
            <?php if ($popup_text) : ?>
              <p id="popup-text-<?php echo $index; ?>" data-text="<?php echo $popup_text; ?>" style="display: none"></p>
            <?php endif; ?>
            <?php
            if (have_rows('appliance_logos')) :
              while (have_rows('appliance_logos')) : the_row();
                $logo = get_sub_field('logo');
            ?>
                <div class="popup-logos-<?php echo $index; ?>" data-src="<?php echo $logo['url']; ?>" data-alt="<?php echo $logo['alt']; ?>" style="display: none"></div>
            <?php
              endwhile;
            endif;
            ?>
          </div>

      <?php
        endwhile;
      endif;
      ?>

      </div>

      <?php

      if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>

        <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

      <?php endif; ?>

  </div>
</div>

<!-- Modal Popup -->
<?php include "modal.php"; ?>
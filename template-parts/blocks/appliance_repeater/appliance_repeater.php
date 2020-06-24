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
$className = 'home-services';
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

  <div class="container-1000">
    <h2><?php echo $title; ?></h2>
    <p><?php echo $sub_title; ?></p>


    <?php if (have_rows('appliance_repeater')) : ?>

      <div class="service-grid">

        <?php while (have_rows('appliance_repeater')) : the_row();
          // vars
          $service = get_sub_field('service');
          $image = get_sub_field('image');
          $modal_text = get_sub_field('popup_text');
        ?>

          <div class="icon-wrap modal-button">
            <div class="icon">
              <img class="appliance-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
            <p class="appliance-icon-title"><?php echo $service; ?></p>
          </div>


        <?php endwhile; ?>

      </div>

    <?php endif; ?>


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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-icon-wrap">
      <div class="modal-icon">
        <img class="modal-app-icon" src="" alt="Peak Icon">
      </div>
      <p class="modal-icon-name"></p>
      <p class="intro-text">
        <?php echo $modal_text; ?>
      </p>

      <?php if (have_rows('appliance_logos')){ ?>

        <div class="modal-logos">

          <?php while (have_rows('appliance_logos')) : the_row();
            $logo = get_sub_field('logo');
          ?>

            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />

          <?php endwhile; ?>

        </div>

      <?php } else { ?>

        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/modal_brands.svg" alt="Peak Brands">

      <?php } ?>

      <p class="small-text">Don’t see your brand? No worries, contact us and we’ll see if we can service your appliance.</p>
      <hr>
      <a class="button" href="/schedule-service">Schedule Service</a>
    </div>
  </div>

</div>


<script>
  (function($) {
    const $appButton = $('.modal-button');
    const $appModal = $('.modal');
    const $closeButton = $('.close');
    const $modalContent = $('.modal-content');

    $appButton.click(function(e) {
      e.preventDefault();
      const image = $(this).closest('.icon-wrap').find('img.appliance-icon').attr('src');
      const title = $(this).closest('.icon-wrap').find('p.appliance-icon-title').context.innerText;
      
      $appModal.addClass('modal-show');
      $('.modal-app-icon').attr('src', image);
      $('.modal-icon-name').text(title);
    });
  })(jQuery);


  const modal = document.querySelector('#myModal');
  const modalCloseButton = document.querySelector('.close');

  if (modal) {
    modal.addEventListener('click', function(e) {
      if (e.target == modal || e.target == modalCloseButton) {
        modal.classList.remove('modal-show');
      }
    })
  }
</script>
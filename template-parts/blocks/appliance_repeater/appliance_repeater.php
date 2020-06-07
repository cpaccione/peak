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
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-services';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
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


            <?php if( have_rows('appliance_repeater') ): ?>

                <div class="service-grid">

                <?php while( have_rows('appliance_repeater') ): the_row(); 

                    // vars
                    $service = get_sub_field('service');
                    $image = get_sub_field('image');


                    ?>

                        <div class="icon-wrap" id="modal-button">
                            <div class="icon">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <p><?php echo $service; ?></p>
                        </div>
                    

                <?php endwhile; ?>

                </div>

            <?php endif; ?>


            <?php 

            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>

                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

            <?php endif; ?>

    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


<script>


( function( $ ) {

  const appButton = $('#modal-button');
  const appModal = $('#myModal');

  $($appButton).on('click', function(e) {
    // console.log( $(this).text() );
    e.preventDefault()
    $($appModal).addClass('modal-show');
    // const title = e.target.closest('.content-event').children[1].innerText
    // const target = e.target.closest('.content-event').children[0].innerText.replace(/\n/g, " | ")
    // // console.log(title, target);
    // $('#event-date').val(target);
    // $('#event').val(title);
  });

} )( jQuery );

    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php

/*

Template Name: Schedule Service

*/

?>


<?php get_header(); ?>


    <div class="standard-hero">
        <h1>Schedule Service</h1>
    </div>

    <div class="container">
        <section class="form-section">
            <div class="col">
                <div class="wrap">
                    <h2>looking to schedule a service or ask questions?</h2>
                    <hr>
                    <p>Fill out the form below and we will contact you within XX hours.</p>
                </div>
                <div class="form">
                    <?php the_field('form'); ?>
                </div>
                <div class="wrap-col">
                    <div class="col"></div>
                    <div class="col">
                        <p>Pricing includes a standard service charge which are factored towards repair costs if repairs are done.</p>
                        <ul>
                            <li>$99 for residential appliances</li>
                            <li>$69 for furnace and air conditions</li>
                            <li>$139 for commercial units</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="contact-info">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/peak-contact-logo.svg" alt="Peak Heating Cooling Refrigeration">
                    <ul>
                        <li><span>Hours:</span></li>
                        <li>Monday - Saturday 8 am - 9 pm</li>
                        <li>Sundays 8 am - 3 pm</li>
                    </ul>

                    <ul>
                        <li><span>Phone:</span></li>
                        <li>847-510-8302</li>
                    </ul>

                    <ul>
                        <li><span>Location:</span></li>
                        <li>Chicago, IL</li>
                    </ul>
                </div>
                <div class="financing-info">
                    <h2>financing</h2>
                    <p>At Peak, we understand that appliance repairs can be an unexpected cost. Take advantage of our financing options <a href="#" target="_blank">Learn More</a></p>
                </div>
            </div>
        </section>
    </div>



<?php get_footer(); ?>

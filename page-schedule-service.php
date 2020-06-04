<?php

/*

Template Name: Schedule Service

*/

?>


<?php get_header(); ?>


    <div class="standard-hero">
        <?php the_title('<h1>', '</h1>'); ?>
    </div>

    <div class="container">
        <section class="form-section">
            <div class="col">
                <div class="form">
                    <div class="wrap">
                        <h2>looking to schedule a service or ask questions?</h2>
                        <hr>
                        <p>Fill out the form below and we will contact you within XX hours.</p>
                    </div>

                    <?php the_field('form'); ?>
                </div>
                <div class="wrap-col">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="112" height="112" viewBox="0 0 112 112"><defs><style>.a{fill:none;stroke:#00a1ed;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><g transform="translate(-4145.909 -1980.91)"><path class="a" d="M5269.672,4887.566a7.781,7.781,0,0,0-7.758-7.761h-11.447a7.782,7.782,0,0,0-7.761,7.761v4.576a7.781,7.781,0,0,0,7.761,7.758h11.447a7.782,7.782,0,0,1,7.758,7.761v4.575a7.781,7.781,0,0,1-7.758,7.761h-11.447a7.782,7.782,0,0,1-7.761-7.761" transform="translate(-1054.28 -2862.99)"/><line class="a" y1="7.905" transform="translate(4201.909 2005.145)"/><line class="a" y1="7.905" transform="translate(4201.909 2060.77)"/><ellipse class="a" cx="45.8" cy="45.8" rx="45.8" ry="45.8" transform="translate(4156.109 1991.109)"/><ellipse class="a" cx="55" cy="55" rx="55" ry="55" transform="translate(4146.909 1981.91)"/></g></svg>
                    </div>
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
                    <p>At Peak, we understand that appliance repairs can be an unexpected cost. Take advantage of our financing options <a href="https://beta.apptracker.ftlfinance.com/new/C20069" target="_blank">Learn More</a></p>
                </div>
            </div>
        </section>
    </div>



<?php get_footer(); ?>

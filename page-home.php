<?php

/*

Template Name: Peak Home

*/

?>


<?php get_header(); ?>

    <div class="home-hero">
        <div class="container-1000">
            <div class="wrap">
                <h2>Chicagoland Appliance Repair, Installation, and Maintenance</h2>
                <h1>Heating, Cooling, <span class="no-wrap">&amp; Refrigeration</span></h1>
                <a class="button" href="">schedule service</a>
                <a class="phone" href="tel:8475108302">or Call 847-510-8302</a>
            </div>
        </div>
    </div>

    <div class="home-services">
        <div class="container-1000">
            <h2>appliance repair services</h2>
            <p>commercial &amp; residential</p>

            <div class="service-grid">
                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Water Heater</p>
                </div>

                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Washer</p>
                </div>

                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>

                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/temp_icon.svg" alt="icon">
                    </div>
                    <p>Dryer</p>
                </div>


            </div>

            <a href="" class="button">learn more</a>
        </div>
    </div>

    <div class="pricing">
        <div class="pricing-wrap">
            <div class="col">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/dollar_icon.svg" alt="Dollar Icon">
            </div>
            <div class="col">
                <h2>pricing</h2>
                <p>Pricing includes a standard service charge which are factored towards repair costs if repairs are done.</p>
                <ul>
                    <li>$99 for residential appliances</li>
                    <li>$69 for furnace and air conditions</li>
                    <li>$139 for commercial units</li>
                </ul>
            </div>
        </div>
        <div class="line"></div>
        <div class="pricing-wrap">
            <div class="col">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/gear_icon.svg" alt="Dollar Icon">
            </div>
            <div class="col">
                <p>If your appliance cannot be repaired, we can help order new appliances to fit your space, with direct delivery and installation. Learn More</p>
            </div>
        </div>
    </div>


<?php get_footer(); ?>

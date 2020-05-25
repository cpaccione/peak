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
                <img style="display: inline-block;" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/dollar_icon.svg" alt="Dollar Icon">
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
                <img style="display: inline-block;" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/gear_icon.svg" alt="Dollar Icon">
            </div>
            <div class="col">
                <p>If your appliance cannot be repaired, we can help order new appliances to fit your space, with direct delivery and installation. Learn More</p>
            </div>
        </div>
    </div>

    <div class="two-alt">
        <div class="col col-1">
            <div class="wrap">
                <h2>maintenance</h2>
                <p>Own multiple property? Service tenants? Or simply want to ensure the lifespan of your appliance?</p>
                <p>Save on future costs and replacements with routine maintenance.</p>
                <a href="#" class="button">learn more</a>            
            </div>
        </div>
        <div class="col col-2">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kitchen@2x.png" alt="Maintenance">
        </div>
        <div class="col col-3">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/samsung_hvac@2x.png" alt="Installation">
        </div>
        <div class="col col-4">
            <div class="wrap">
            <h2>installation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <a href="#" class="button">learn more</a>            
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container-1000">
            <div class="testimonial-slider">
                <div>
                    <div class="test-wrap">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2>
                    <p>- Jane Doe, Chicago</p>                
                    </div>
                </div>
                <div>
                    <div class="test-wrap">
                        <h2>There are five pups. One for each of the Stark children. The direwolf is the sigil of your house. They were meant to have them.</h2>
                        <p>- Jon Snow, Winterfell</p>            
                    </div>
                </div>
                <div>
                    <div class="test-wrap">
                        <h2>I have a realistic grasp of my own strengths and weaknesses. My mind is my weapon. My brother has his sword, King Robert has his warhammer, and I have my mind… and a mind needs books as a sword needs a whetstone, if it is to keep its edge. That’s why I read so much, Jon Snow.</h2>
                        <p>- Tyrion Lannister, King's Landing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="questions">
        <div class="wrap">
            <h2>have questions</h2>
            <p>Reach out to us and we will be happy to help.</p>
            <a href="#" class="button">contact us</a>
        </div>
    </div>


<?php get_footer(); ?>

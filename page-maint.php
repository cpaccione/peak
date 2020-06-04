<?php

/*

Template Name: Maintenance / Installation

*/

?>


<?php get_header(); ?>


    <!-- <div class="standard-hero">
        <h1>about peak</h1>
    </div> -->

    <section class="main-hero" style="background-image: url('<?php the_field('background_image'); ?>')">
        <div class="container">
            <div class="hero-with-image">
                <div class="hwi">
                    <div class="wrap">
                        <h2><?php the_field('title'); ?></h2>

                        <p><?php the_field('sub_heading'); ?></p>
                        <p><?php the_field('body'); ?></p>

                        <a href="#" class="button">Fill Out Form</a>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
<section class="form-section">
    <div class="col">
        <div class="form">
            <p>Fill out the form below and we will contact you within XX hours.</p>
            <?php the_field('form'); ?>
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
    </div>
</section>
    </div>




    <div class="financing">
        <div class="container">
            <div class="wrap">
                <h2>Financing</h2>
                <p>At Peak, we understand that appliance repairs can be an unexpected cost. Take advantage of our financing options. Learn More</p>
            </div>
        </div>
    </div>

    <div class="service-areas">
        <div class="container">
            <div class="wrap">
                <h2>service areas</h2>
                <p>Servicing neighborhoods throughout chicago & surrounding suburbs</p>
                <p class="list-of-areas">Addison • Albany Park • Algonquin • Andersonville • Arcadia Terrace • Arlington Heights • Avondale • Austin* • Barrington • Bartlett • Batavia • Bellwood • Belmont • Berwyn • Big Oaks • Bloomingdale • Bowmanville • Brickyard • Bucktown • Budlong Woods • Buena Park • Carol Stream • Carpentersville • Cary • Chicago* • Cicero • Cragin • Crystal Lake • Dearborn Park* • DePaul • Des Plaines • Downers Grove • Dundee • Dunning • Edgebrook • Edgewater • Edison Park • East Village • Elgin • Elk Grove Village • Elmhurst • Elmwood Park • Evanston • Forest Glen • Forest Park • Franklin Park • Fulton River District • Galewood • Geneva • Glendale Heights • Glen Ellyn • Gold Coast* • Goose Island • Greektown • Hanover Park • Hanson Park • Harwood Heights • Hermosa • Hoffman Estates • Humboldt Park • Irving Park • Irving Woods • Itasca • Jefferson Park • Kelvyn Park • Kilbourn Park • Lake in the Hills • Lakeview • Lakewood/Balmoral • Lincoln Park • Lincoln Square • Lincolnwood • Lisle • Little Italy • Logan Square • Lombard • Loyola • Margate Park • Mayfair • Maywood • McHenry • Melrose Park • Monteclare/Galewood • Morton Grove • Mount Prospect • Naperville • Near North* • Niles • Noble Square • Norridge • North Center • North Park • Northlake • Norwood Park • Oak Park • Old Town • Oriole Park • Palatine • Palmer Square • Park Ridge • Peterson Park • Portage Park • Printers Row* • Ravenswood • River Forest • River Grove • River North • River West • Rogers Park • Rolling Meadows • Roscoe Village • Roselle • Rosemont • St. Charles • Sauganash • Schuamburg • Schiller Park • Schorsch Village • Sheridan Park • Skokie • South Loop* • Streamwood • Streeterville • Ukranian Village* • Union Ridge • University Village* • Uptown • The Villa • Villa Park • Warrenville • West Chicago • West Loop* • West Ridge • Wheaton • Wicker Park • Willowbrook • Wood Dale • Woodstock • Wrigleyville</p>
            </div>
        </div>
    </div>


<?php get_footer(); ?>

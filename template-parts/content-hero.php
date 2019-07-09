<?php 

//Hero Pricing//
$pre_launch_price_title  = get_field('pre_launch_price_title');
$pre_launch_price_description  = get_field('pre_launch_price_description');
$pre_launch_price  = get_field('pre_launch_price');
$launch_price_title  = get_field('launch_price_title');
$launch_price_description  = get_field('launch_price_description');
$launch_price  = get_field('launch_price');
$final_price_title  = get_field('final_price_title');
$final_price_description  = get_field('final_price_description');
$final_price  = get_field('final_price');

?>
<!-- HERO BANNER
    ==========================================================-->
    <section id="hero" data-type="background" data-speed="5">
        <article>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo">
                    </div>
                    <div class="col-sm-7 hero-text">
                        <h1><?php bloginfo('name'); ?></h1> <!--Pulls in the site title in settings > general -->
                        <p class="lead"><?php bloginfo('description'); ?></p> <!-- This pulls in the site tagline in settings > general -->
                            <div id=price-timeline>
                                    <div class="price active">
                                        <h4><?php echo $pre_launch_price_title; ?><small><?php echo $pre_launch_price_description; ?></small></h4>
                                        <span><?php echo $pre_launch_price; ?></span>
                                    </div>
                                    <div class="price">
                                        <h4><?php echo $launch_price_title; ?><small><?php echo $launch_price_description; ?></small></h4>
                                        <span><?php echo $launch_price; ?></span>  
                                    </div>
                                    <div class="price">
                                        <h4><?php echo $final_price_title; ?><small><?php echo $final_price_description; ?></small></h4>
                                           <span><?php echo $final_price; ?></span> 
                                    </div>
                                </div>
                                <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll Now &raquo;</a></p>
                    </div>
                </div>
            </div>
        </article>

    </section>
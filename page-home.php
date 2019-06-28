<?php
/*
    Template Name: Homepage
 */

 // Advanced Custom Fields //

 //Pricing//
$pre_launch_price_title  = get_field('pre_launch_price_title');
$pre_launch_price_description  = get_field('pre_launch_price_description');
$pre_launch_price  = get_field('pre_launch_price');
$launch_price_title  = get_field('pre_launch_price_title');
$launch_price_description  = get_field('pre_launch_price_description');
$launch_price  = get_field('pre_launch_price');
$final_price_title  = get_field('final_price_title');
$final_price_description  = get_field('final_price_description');
$final_price  = get_field('final_price');
$enroll_now_button = get_field('enroll_now_button');

 //How you can boost your income//
 $income_feature_image  = get_field('income_feature_image');
 $income_section_title  = get_field('income_section_title');
 $income_section_desc  = get_field('$income_section_description');
 $reason_1_title  = get_field('reason_1_title');
 $reason_1_desc = get_field('reason_1_description');
 $reason_2_title  = get_field('reason_2_title');
 $reason_2_desc = get_field('reason_2_description');

 //Who should take this course//
 $who_feature_image = get_field('who_feature_image');
 $who_section_title = get_field('who_section_title');
 $who_section_body = get_field('who_section_body');

 //Who should take this course//
 $features_section_image = get_field('features_section_image');
 $features_section_title = get_field('features_section_title');
 $features_section_body = get_field('features_section_body');

 
 //Project Features//
$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');

 //Course Instruction//
 $course_instruction_title = get_field('course_instruction_title');
 $course_instruction_body = get_field('course_instruction_body');
 $course_instruction_video = get_field('course_instruction_video');


get_header(); ?>

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

    <!-- OPT IN SECTION
    ==========================================================-->
    <section id="optin">
        <div class="container">
           <div class="row">
               <div class="col-sm-8">
                    <p><strong>Subscribe to our mailing list.</strong> We'll send something special as a thank you.</p>
               </div>
               <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to subscribe!</button>
               </div>
           </div>
        </div>
    </section>

    <!-- BOOST YOUR INCOME
    ==========================================================-->
    <section id="boost-income">
        <div class="container">
            <div class="section-header">

                <!-- If user uploaded an image -->
                <?php if( !empty($income_feature_image) ) : ?>
                    <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
                <?php endif; ?>

                <h2><?php echo $income_section_title; ?></h2>
            </div>
            <p class="lead"><?php echo $income_section_desc; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_desc; ?></p>
                </div>
                <div class="col-sm-6">
                    <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_desc; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO BENEFITS
    ==========================================================-->
    <section id="who-benefits">
        <div class="container">
            <div class="section-header">
            <!-- If user uploaded an image -->
                <?php if( !empty($who_feature_image) ) : ?>
                    <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
                <?php endif; ?>
                <h2><?php echo $who_section_title; ?></h2>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                 <?php echo $who_section_body; ?>         
                </div>
            </div>
        </div>
    </section>

    <!-- COURSE FEATURES
    ==========================================================-->
    <section id="course-features">
        <div class="container">
            <div class="section-header">
             <!-- If user uploaded an image -->
                <?php if( !empty($features_section_image) ) : ?>
                    <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                <?php endif; ?>
                <h2><?php echo $features_section_title; ?></h2>

            <!-- If user added body text -->
                <?php if( !empty($features_section_body) ) : ?>
                    <p><?php echo $features_section_body; ?></p>
                <?php endif; ?>
            </div>
            <div class="row">

                <?php $loop = new WP_Query( array ( 'post_type' => 'course_feature', 'order_byd' => 'post_id', 'order' => 'ASC' ) ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-sm-2">
                        <i class="<?php the_field('course_feature_icon'); ?>"></i>
                        <h4><?php the_title(); ?></h4>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- PROJECT FEATURES
    ==========================================================-->
    <section id="project-features">
        <div class="container">
                <h2><?php echo $project_feature_title; ?></h2>
                <p class="lead"><?php echo $project_feature_body; ?></p>
            <div class="row">
                <?php $loop = new WP_Query( array ( 'post_type' => 'project_feature', 'order_byd' => 'post_id', 'order' => 'ASC' ) ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-sm-4">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- VIDEO FEATURETTE
    ==========================================================-->
    <section id="featurette">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h2><?php echo $course_instruction_title; ?></h2>
                    <!-- If user added body text -->
                <?php if( !empty($course_instruction_body) ) : ?>
                    <p><?php echo $course_instruction_body; ?></p>
                <?php endif; ?>
                    <div class="embed-container">
                        <?php echo $course_instruction_video; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- INSTRUCTOR
    ==========================================================-->
    <section id="instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Your Instructor <small class="text-muted">Brad Hussey</small></h2>
                        </div>
                        <div class="div col-lg-4">
                            <a href="https://twiter.com/bradhussey" target="_blank" class="badge social twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                    <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</p>
                    <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code. </p>
                    <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big & small, across the Americas. </p>
                    <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
                    <hr>
                    <h3>The Numbers <small class="text-muted">They Don't Lie</small></h3>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    41,000+ <span>students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    568 <span>reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="num">
                                <div class="num-content">
                                    8 <span>courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS
    ==========================================================-->
    <section id="kudos">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <h2>What People Are Saying About Brad</h2>

                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                        </div>
                        <div class="col-sm-8">
                            <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in erat at nunc rutrum tincidunt sit amet ut tortor. Pellentesque vel ornare quam, et iaculis nisl. In purus lectus, molestie a elementum vitae, placerat sed velit. Sed mi tortor, finibus a mollis nec, rutrum sagittis risus. Vivamus non elit volutpat, dapibus ipsum in, interdum nisl. <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
                            </blockquote>
                        </div>
                    </div>
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in erat at nunc rutrum tincidunt sit amet ut tortor. Pellentesque vel ornare quam, et iaculis nisl. In purus lectus, molestie a elementum vitae, placerat sed velit. Sed mi tortor, finibus a mollis nec, rutrum sagittis risus. Vivamus non elit volutpat, dapibus ipsum in, interdum nisl. <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
                                </blockquote>
                            </div>
                        </div>
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in erat at nunc rutrum tincidunt sit amet ut tortor. Pellentesque vel ornare quam, et iaculis nisl. In purus lectus, molestie a elementum vitae, placerat sed velit. Sed mi tortor, finibus a mollis nec, rutrum sagittis risus. Vivamus non elit volutpat, dapibus ipsum in, interdum nisl. <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
                                </blockquote>
                            </div>
                        </div> 
                    <!-- TESTIMONIAL -->
                    <div class="row testimonial">
                            <div class="col-sm-4">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
                            </div>
                            <div class="col-sm-8">
                                <blockquote>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in erat at nunc rutrum tincidunt sit amet ut tortor. Pellentesque vel ornare quam, et iaculis nisl. In purus lectus, molestie a elementum vitae, placerat sed velit. Sed mi tortor, finibus a mollis nec, rutrum sagittis risus. Vivamus non elit volutpat, dapibus ipsum in, interdum nisl. <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
                                </blockquote>
                            </div>
                        </div>       
                </div>
            </div>
        </div>

    </section>
    
    
<?php get_footer();?>    
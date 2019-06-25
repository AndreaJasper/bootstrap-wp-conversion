<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<!-- BOOTSTRAP CORE CSS-->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>

	<!--remove this just need to make a change to commit to github-->

	 <!-- HEADER
    ==========================================================-->
    <header class="site-header" role="banner">
        <!--NAVBAR
        ==========================================================-->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                        <div class="container">    
                            <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
							</button><!-- navbar header -->
							
							<?php
								wp_nav_menu( array(
									'theme_location'  => 'primary',
									'container' => 'nav',
									'container_class' => 'navbar-toggler',
									'menu_class' => 'nav navbar-nav navbar-right'
								));
							?>	
                        </div>    
					</nav><!--navbar wrapper end-->  
					
	</header>

<div id="content" class="site-content">



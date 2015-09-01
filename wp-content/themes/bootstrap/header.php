<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php wp_head(); ?> 
        <!-- wp_head allows wordpress to add any code it wants to add for plugins -->
    </head>
    <body <?php body_class(); ?>>
         <div class="container">
            <header>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php get_site_url();?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" width="xxx" height="xxx" />
                        </a>
                    </div>
                    <div class="col-md-8 text-center">
                        <h3 id="proudly-providing">Proudly Providing</h3>
                        <img src="<?php bloginfo('template_directory'); ?>/images/toro.png" alt="" width="xxx" height="xxx" />
                        <img src="<?php bloginfo('template_directory'); ?>/images/stihl.png" alt="" width="xxx" height="xxx" />
                        <img src="<?php bloginfo('template_directory'); ?>/images/simplicity.png" alt="" width="xxx" height="xxx" />
                        <img src="<?php bloginfo('template_directory'); ?>/images/massy.png" alt="" width="xxx" height="xxx" />
                        <img src="<?php bloginfo('template_directory'); ?>/images/land-pride.png" alt="" width="xxx" height="xxx" />
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </header>
        </div>
        <div class="container-fluid" id="nav-container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php get_site_url();?>/">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">FINANCING</a></li>
                        <li><a href="#">SALES</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="<?php get_site_url();?>/shop">MASSY LAWN TRACTORS</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">BLOG</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>

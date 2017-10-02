<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatixle" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans|Lato' rel='stylesheet' type='text/css'>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">  
        <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">

        <?php wp_enqueue_script("modernizr"); ?> 
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_enqueue_script("bootstrap"); ?>
        <?php wp_enqueue_script("main"); ?>
            <?php wp_head(); ?>
        

    </head>
    <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="top">
<div class="containertop">  
<nav class="navbar navbar-default navbar-fixed-top"> 
        <div class="navbar-header">
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <div id="navbar-logo" class="navbar-logo dropshadowfilter">
                <div class="navbar-logo-img">
                <img src='<?php echo esc_url( get_theme_mod( 'theme_logo' ) ); ?>'>
                </div>    
                <div class="navbar-logo-text">
                <h1>Crown Jade</h1>
                <h2>Design and Engineering</h2>    
                </div></a>    
                </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">  
            <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'false',
                'container_class'   => 'false',
                'container_id'      => 'false',
                'menu_class'        => 'nav navbar-nav navbar-right dropshadowfilter',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>   
        </div><!--/.nav-collapse -->
      
</nav>
</div>  
</div>   
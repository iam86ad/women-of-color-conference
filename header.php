<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Women of color conference
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
        <?php do_action( 'before' ); ?>
        <nav class="main-nav">
        	<div class="container">
                <a href="#" class="main-nav--logo">
                    <img src="http://localhost:8888/wocc/assets/logo.jpg" alt="">
                </a>
                <ul class="main-nav--menu">
                	<li><a href="#" title="Register">Register</a></li>
                	<li><a href="#" title="">The Conference</a></li>
                	<li><a href="#" title="">Schedule</a></li>
                	<li><a href="#" title="">Location</a></li>
                	<li><a href="#" title="">Sponsors</a></li>
                	<li><a href="#" title="">History</a></li>
                </ul>
        	</div>
        </nav>

	<!-- <div id="content" class="site-content"> -->

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vintageStore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">

		<nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" to="/home">
        Z A N A vintage
      </a>
<!--       
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button> -->
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto Links">
          <li class="nav-item active">
            <a href="/all" class="nav-link">
              Shop All Items  
            </a>
          </li>
          <li class="nav-item active">
            <a href="/about" class="nav-link">
                About  
            </a>
          </li>
          <li class="nav-item active">
            <a href="/blog" class="nav-link">
               Blog  
            </a>
          </li>
          <li class="nav-item active">
            <a href="/account" class="nav-link">
               Account  
            </a>
          </li>
          <li class="nav-item active">
            <a href="/cart" class="nav-link">
               Cart 
            </a>
          </li>
        </ul>
        </div>
    </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

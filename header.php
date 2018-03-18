<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CEB
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108813320-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108813320-1');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="header">
    <div class="header-left">
    	<a href="/">
      <h1>Cameron Barry</h1>
      <h2>writer <span class="gray">|</span> editor</h2>
      </a>
    </div>

    <div class="header-right">
      <ul class="primary-nav hidden-phone">
        <li><a href="/about">about</a></li>
        <li><a href="/services">services</a></li>
        <li><a href="/writing-samples">writing samples</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="https://books.wordscountllc.com/">recommended books</a></li>
	  </ul>
	  
	  <div class="menu-mobile visible-phone">
        <span class="menu-mobile visible-phone" onclick="openNav()"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
	  </div>
	
	</div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/about">about</a>
        <a href="/services">services</a>
        <a href="/writing-samples">writing samples</a>
        <a href="/contact">contact</a>
        <li><a href="https://books.wordscountllc.com/">recommended books</a></li>
    </div>

  </div>
</header>

<!-- #masthead -->


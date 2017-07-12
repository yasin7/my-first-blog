<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<style type="text/css">
	#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("<?php echo get_template_directory_uri(); ?>/assets/images/hourglass.svg") no-repeat center center rgba(0,0,0,1)
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dat-menu.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script type="text/javascript">
    document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('body-contents').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('body-contents').style.visibility="visible";
      },1000);
  }
}
  </script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="load"></div>
<div id="body-contents">

<header>

<div class="container-fluid header-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12 logo-sec">
			<a class="navbar-brand-bak" href="<?php echo home_url(); ?>">
				               <!--  <?php bloginfo('name'); ?> -->
				               <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="206px" height=103px" viewBox="0 0 256 126" enable-background="new 0 0 256 126" xml:space="preserve" style="background: #010101; position: relative;
    bottom: -50px;">
<g stroke-width="2">
<!-- 	<rect x="0.286" y="0.665" fill="#010101" width="256" height="126.001"/> -->
	<path fill="none" stroke="#ED2224" stroke-miterlimit="10" d="M53.536,47.415"/>
	<path fill="none" stroke="#ED2224" stroke-miterlimit="10" d="M31.036,47.415"/>
	<path fill="none" stroke="#ED2224" stroke-miterlimit="10" d="M100.536,57.415"/>
	<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="31.036,94.166 31.036,47.415 53.536,47.415 53.536,94.166 
		69.786,94.166 69.786,47.415 91.536,47.415 100.536,57.999 100.536,47.415 111.953,47.415 111.953,94.166 90.453,94.166 
		81.786,84.078 81.786,94.166 	"/>
	<polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="31.036,47.415 71.953,9.347 112.359,47.415 	"/>
	<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="127.946,94.166 127.946,46.997 170.863,46.997 
		170.863,59.749 148.589,59.624 170.863,59.749 170.863,83.76 148.589,83.76 170.863,83.76 170.863,94.166 	"/>
	<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="185.002,46.174 205.669,68.676 225.835,46.174 	"/>
	<polygon fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="205.618,74.5 184.534,96.334 226.951,96.334 	"/>
		<text transform="matrix(0.74 0 0 1 30.1187 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.351">I</text>
	
		<text transform="matrix(0.96 0 0 1 33.8057 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.042">N</text>
	
		<text transform="matrix(0.77 0 0 1 42.771 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.299">T</text>
	
		<text transform="matrix(0.81 0 0 1 49.1992 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.235">E</text>
	
		<text transform="matrix(0.76 0 0 1 56.1758 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.316">R</text>
	
		<text transform="matrix(0.74 0 0 1 63.3906 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.351">I</text>
	
		<text transform="matrix(1.09 0 0 1 67.249 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="0.917">O</text>
	
		<text transform="matrix(0.87 0 0 1 77.6685 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.149">R &amp; </text>
	<text transform="matrix(0.87 0 0 1 102.5879 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11">E</text>
	
		<text transform="matrix(0.83 0 0 1 109.124 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.205">X</text>
	
		<text transform="matrix(0.77 0 0 1 116.7749 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.299">T</text>
	
		<text transform="matrix(0.78 0 0 1 123.3979 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.282">E</text>
	
		<text transform="matrix(0.84 0 0 1 129.584 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.19">R</text>
	
		<text transform="matrix(0.87 0 0 1 137.2256 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.149">I</text>
	
		<text transform="matrix(1 0 0 1 141.7617 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="2">O</text>
	
		<text transform="matrix(0.83 0 0 1 152.377 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.205">R </text>
	<text transform="matrix(0.83 0 0 1 164.0449 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11">D</text>
	<text transform="matrix(0.95 0 0 1 171.5137 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11">E</text>
	
		<text transform="matrix(0.86 0 0 1 178.4102 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.163">S</text>
	
		<text transform="matrix(0.83 0 0 1 185.874 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.205">I</text>
	
		<text transform="matrix(1.07 0 0 1 190.1016 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="0.935">G</text>
	
		<text transform="matrix(0.98 0 0 1 200.0713 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.02">N</text>
	
		<text transform="matrix(0.83 0 0 1 209.5898 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.205">E</text>
	
		<text transform="matrix(0.89 0 0 1 216.1992 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.124">R</text>
	
		<text transform="matrix(0.89 0 0 1 223.5615 109.3359)" fill="#FFFFFF" font-family="'ProximaNova-Bold'" font-size="11" letter-spacing="1.124">S</text>
	<polyline id="orange" points="53.438,27.281 90.281,27.281 71.938,9.969"/>
</g>
</svg>
</a>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12 menu-sec">
			<a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i></a>

			<?php
				wp_nav_menu( array(
					'menu'              => 'menu',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => '',
					'container_id'      => 'main-menu',
					'menu_class'        => 'load-responsive',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
			?>
			<div class="after-float">
			<ul class="sticky-ul">
				<a href="http://www.googleplus.com"><li class="plus-li"></li></a>
				<a href="http://www.twitter.com"><li class="twitter-li"></li></a>
				<a href="http://www.fb.com"><li class="fb-li"></li></a>
				
			</ul>
			<div class="mails">
				<a href="tel:+0422763938"> 0422763938</a>
				<a href="mailto:inex360@outlook.com">inex360@outlook.com</a>
			</div>
			</div>
		</div>
	</div>
</div>

	

</header>
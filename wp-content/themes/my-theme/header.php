<?php
/**
 * The Header for our theme.
 *
 * @package Customer-Blvd
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	<!-- 	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/fullpage.js/jquery.fullpage.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/css/materialize.css" />

	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/fullpage.js/jquery.fullpage.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/materialize/dist/js/materialize.js"></script>
	<!--	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script> -->


	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



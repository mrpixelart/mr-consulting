<?php
/**
 *
 * @package mr-consulting
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
	<!-- 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" /> -->
	<!--	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/fullpage.js/jquery.fullpage.css" /> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/semantic-ui/dist/semantic.min.css" />
	
	<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
	<!-- 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
	<!-- 	<script src="<?php echo get_template_directory_uri(); ?>/bower_components/fullpage.js/jquery.fullpage.js"></script> -->



	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="ui fixed inverted menu large">
		<div class="container">
			<a class="active item">
				<i class="home icon"></i> Home
			</a>
			<a class="item">
				<i class="mail icon"></i> Messages
			</a>
		</div>
	</div>




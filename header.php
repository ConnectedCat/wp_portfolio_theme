<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name' ); ?></title>

	<link href='https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('template_directory');?>/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/javascript/main.js"></script>

  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="page-wrap">
	  <nav class="navbar navbar-default">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-thing" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand"><?php bloginfo('description'); ?></span>
        </div>

        <?php wp_nav_menu(array(
          'menu_class' => "nav navbar-nav",
          'container_class' => "collapse navbar-collapse",
          'container_id' => "main-nav-thing"
        )); ?>

      </div>
    </nav>
    <div class="container">

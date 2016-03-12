<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
		
		<!-- FONTS -->
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- nav -->
					    <!-- Fixed navbar -->
					    <nav class="navbar navbar-default navbar-fixed-top">
					    	<div class="container">
					    		<div class="navbar-header">
					    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					    				<span class="sr-only">Toggle navigation</span>
					    				<span class="icon-bar"></span>
					    				<span class="icon-bar"></span>
					    				<span class="icon-bar"></span>
					    			</button>
					    			<a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
					    		</div>
					    		<div id="navbar" class="navbar-collapse collapse">
					    			<?php /* Primary navigation */
					    			wp_nav_menu( array(
					    				  'menu' => 'primary',
					    				  'depth' => 2,
					    				  'container' => false,
					    				  'menu_class' => 'nav navbar-nav navbar-right',
					    				  //Process nav menu using our custom nav walker
					    				  'walker' => new wp_bootstrap_navwalker())
					    				  );
					    				  ?>
					    		</div><!--/.nav-collapse -->
					    	</div>
					    </nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>



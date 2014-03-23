<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" charset="UTF-8">
<title><?php get_bloginfo('name'); ?></title>
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head() ?>
</head>

<body>
	<div class="outer-container">
      	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        	<!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	          	</button>
	          	<a class="navbar-brand" href="<?php echo home_url(); ?>">Home</a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <?php
			    wp_nav_menu( array(
			        'menu'              => 'main',
			        'theme_location'    => 'primary',
			        'depth'             => 2,
			        'menu_class'        => 'nav navbar-nav',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			        'walker'            => new wp_bootstrap_navwalker())
			    );
			?>
	          	<ul class="nav navbar-nav navbar-right">
	          		<li><a href="#">Right Bar</a></li>
		      	</ul>
        	</div><!-- /.navbar-collapse -->
      	</nav>
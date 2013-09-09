<!doctype html>
<html lang="eng">
<head>
<meta charset="utf-8" />
<meta name="google-site-verification" content="J4BsImcQAs1UzEhfRNvDOgwWjWS8uNEKAK0UgB2qYSY" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rodrigo Silveira</title>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/bootstrap-3.0.0.min.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/style.css" />

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-114x114.png" />

<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script src="<?php bloginfo("template_url"); ?>/js/jquery-2.0.3.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
</head>
<body>

	<nav id="v2-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
			   <a href="/" id="homelink">
			      <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Rodrigo Silveira" />
		      </a>

		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span> <span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="v2-nav-links" class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/coding/">/coding</a></li>
					<li><a href="/design/">/design</a></li>
					<li><a href="/rodrigo-silveira/">/about_me</a></li>
					<li><a href="/blog">/blog</a></li>
					<li><a href="/contact-me/">/contact</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->

		</div>
	</nav>
	<div class="v2-main">
	<?php if(is_front_page()):?>
   <div id="billboard">
      <div class="container face">
   		<div class="col-md-10">
   				<p>
   				<strong>I am a software engineer</strong> fascinated with developing web applications, android mobile apps, and video games for the Nintendo Wii U console system. My first book was published in 2013.
   				</p>
   		</div>
      </div>
	</div>
<?php endif;?>
   <div class="container light-panel">

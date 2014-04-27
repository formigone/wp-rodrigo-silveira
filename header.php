<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Rodrigo Silveira</title>

   <link href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.css" rel="stylesheet">
   <link href="<?php bloginfo("template_url"); ?>/assets/css/main.css" rel="stylesheet">
   <link href="<?php bloginfo("template_url"); ?>/css/component.css" rel="stylesheet">

   <meta name="google-site-verification" content="J4BsImcQAs1UzEhfRNvDOgwWjWS8uNEKAK0UgB2qYSY"/>
   <script src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script>
   <script src="<?php bloginfo("template_url"); ?>/js/modernizr.custom.js"></script>

   <script src="<?php bloginfo("template_url"); ?>/assets/js/hover.zoom.js"></script>
   <script src="<?php bloginfo("template_url"); ?>/assets/js/hover.zoom.conf.js"></script>

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-static-top">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/">Rodrigo Silveira</a>
      </div>
      <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
            <li><a href="/coding">Coding</a></li>
            <li><a href="/design">Design</a></li>
            <li><a href="/rodrigo-silveira">About me</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact-me">Contact</a></li>
         </ul>
      </div>
      <!--/.nav-collapse -->
   </div>
</div>

<?php if (is_front_page()): ?>
   <div id="ww">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-lg-offset-2 centered">
               <img src="<?php bloginfo("template_url"); ?>/img/rodrigo-silveira.jpg" alt="Rodrigo Silveira"
                    class="img-circle">

               <?php if (is_active_sidebar('homepage-message')) {
                  dynamic_sidebar('homepage-message');
               } ?>

            </div>
            <!-- /col-lg-8 -->
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div><!-- /ww -->
<?php else: ?>
<?php endif; ?>

<!doctype html>
<html lang="eng">
<head>
   <meta charset="utf-8"/>
   <meta name="google-site-verification" content="J4BsImcQAs1UzEhfRNvDOgwWjWS8uNEKAK0UgB2qYSY"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rodrigo Silveira</title>
   <link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
   <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300" rel="stylesheet" type="text/css">
   <link href="//fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">

   <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/cust-bootstrap.min.css"/>

   <link rel="apple-touch-icon-precomposed" sizes="57x57"
         href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-57x57.png"/>
   <link rel="apple-touch-icon-precomposed" sizes="72x72"
         href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-72x72.png"/>
   <link rel="apple-touch-icon-precomposed" sizes="114x114"
         href="http://formigone.com/pubrecs/icons/rodrigo-silveira-icon-114x114.png"/>

   <script src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script>
   <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>

   <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/component.css" />
   <script src="<?php bloginfo("template_url"); ?>/js/modernizr.custom.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top darkNav" role="navigation">
   <div class="container">
      <div class="navbar-header">

         <a href="/" class="navbar-brand"><strong>Rodrigo</strong> Silveira</a>

         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav navbar-right">
            <li><a href="/coding/">/coding</a></li>
            <li><a href="/design/">/design</a></li>
            <li><a href="/rodrigo-silveira/">/about_me</a></li>
            <li><a href="/blog">/blog</a></li>
            <li><a href="/contact-me/">/contact</a></li>
         </ul>
      </div>
   </div>
</nav>

<?php if (is_front_page()): ?>
   <div class="vert50"></div>
   <div id="billboard">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 block">
               <p>
                  <strong>I am a software engineer</strong> fascinated with developing web applications, android mobile
                  apps, and video games for the Nintendo Wii U console system. My first book was published in 2013.
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="vert20"></div>
<?php else: ?>
   <div class="vert70"></div>
<?php endif; ?>

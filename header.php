<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="google-site-verification" content="J4BsImcQAs1UzEhfRNvDOgwWjWS8uNEKAK0UgB2qYSY"/>

   <title>Initio - Free, multipurpose html5 template by GetTemplate</title>

   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
   <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/styles.css">

   <script src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script>
   <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>

   <!--[if lt IE 9]>
   <script src="<?php bloginfo(" template_url"); ?>/assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">

   <?php if (is_front_page()): ?>
      <div id="head" class="parallax" parallax-speed="2">
         <h1 id="logo" class="text-center">
            <img class="img-circle" src="<?php bloginfo(" template_url"); ?>/assets/images/guy.jpg" alt="">
            <span class="title">Rodrigo Silveira</span>
            <span class="tagline">Software Engineer</span>
         </h1>
      </div>
   <?php endif; ?>

   <nav class="navbar navbar-default navbar-sticky">
      <div class="container-fluid">

         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                  class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
         </div>

         <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
               <li class="active"><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="sidebar-left.html">Left Sidebar</a></li>
                     <li><a href="sidebar-right.html">Right Sidebar</a></li>
                     <li><a href="single.html">Blog Post</a></li>
                  </ul>
               </li>
               <li><a href="blog.html">Blog</a></li>
            </ul>

         </div>
         <!--/.nav-collapse -->
      </div>
   </nav>
</header>

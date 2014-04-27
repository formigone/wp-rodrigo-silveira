<?php

$data = array(
   array('href' => 'http://www.youtube.com/watch?v=oJxWhmt5m-o', 'img' => '/img/html5-websocket-stock-simulator.jpg', 'title' => 'HTML5 Sebsocket Stock Simulator'),
   array('href' => '/webgl/demos/mesh-from-json.php', 'img' => '/img/html5-webgl-load-model-from-json.jpg', 'title' => 'HTML5 WebGL Load 3D Model From JSON'),
   array('href' => '/html5-games/2d-space-shooter/', 'img' => '/img/html5-game-mobile.png', 'title' => 'Mobile-friendly HTML5 2D Space Shooter'),
   array('href' => 'https://play.google.com/store/apps/details?id=com.ksl.android.sherlock', 'img' => '/img/android-2d-physics-demo-app.png', 'title' => 'Android 2D Physics Demo App - with Super Mario Brothers'),
   array('href' => 'https://play.google.com/store/apps/details?id=com.formigone.life', 'img' => '/img/android-ascii-game-of-life.png', 'title' => 'Android App - ASCII Game of Life'),
   array('href' => '/dharma/web-demos/html5-canvas-3d-particle-system.html', 'img' => '/img/cool-3d-particle-system-HTML5-canvas-blood-cells.jpg', 'title' => 'Cool 3D Particle System in HTML5 Canvas: Blood Cells'),
   array('href' => '/dharma/rnd/multi-channel3.html', 'img' => '/img/html5-blur-filter.jpg', 'title' => 'HTML5 Blur Filter'),
   array('href' => '/webgl/demos/cloud-of-cubes.php', 'img' => '/img/html5-webgl-super-mario-galaxy.jpg', 'title' => 'HTML5 WebGL Super Mario Galaxy'),
   array('href' => '/dharma/web-demos/rokkocode-jquery-plugin-demo.html', 'img' => '/img/jquery-syntax-highlighter.png', 'title' => 'Syntax Highlighter jQuery Plugin'),
   array('href' => '/html5-games/jelly-gravity-game.html', 'img' => '/img/html5-game-svg.png', 'title' => 'HTML5 Jelly Gravity Game Demo: SVG, Drag & Drop'),
   array('href' => '/html5-games/snake/', 'img' => '/img/html5-game-snake.png', 'title' => 'HTML5 Snake Game Prototype'),
   array('href' => '/html5-games/css3-animation-typography-game.html', 'img' => '/img/html5-typography-game.png', 'title' => 'CSS3 Animation Demo: HTML5 Typography Game Prototype'),
   array('href' => '/dharma/rnd/js-gm03.html', 'img' => '/img/html5-super-mario-bros-2d-tile-map-game-physics.png', 'title' => 'HTML5 2D Tile Map Loader - Super Mario Brother'),
   array('href' => '/dharma/rnd/glide_min.html', 'img' => '/img/html5-mobile-shake-detection.png', 'title' => 'HTML5 Mobile Shake Gesture Detection'),
   array('href' => '/learning-html5-creating-fun-games', 'img' => '/img/learn-html5-by-creating-fun-games.png', 'title' => 'Learning HTML5 by Creating Fun Games: My First Book'),
   array('href' => 'https://chrome.google.com/webstore/detail/tupacsum/dokiogadbpnilohbdnhahpoeebljielo?utm_source=chrome-ntp-icon', 'img' => '/img/tupacsum-lorem-ipsum-generator.png', 'title' => 'Tupacsum: A Lorem Ipsum generator for the web designer that keeps it real'),
   array('href' => 'https://chrome.google.com/webstore/detail/speed-reading-trainer/klloefpijaofgelefjimlhdikagaegfe?utm_source=chrome-ntp-icon', 'img' => '/img/speed-reading-trainer-html5-app.png', 'title' => 'Speed Reading Trainer: HTML5 App'),
   array('href' => 'https://chrome.google.com/webstore/detail/the-pattern-game/hbnoeeabhaandafbfgnfgkfhbllempce?utm_source=chrome-ntp-icon', 'img' => '/img/html5-app-the-pattern-game.png', 'title' => 'The Pattern Game: HTML5 App'),
   array('href' => 'https://chrome.google.com/webstore/detail/omikuji-fortune-cookie/mpmmicdpekgjjmcaegpeajiaagclnemk?utm_source=chrome-ntp-icon', 'img' => '/img/html5-app-fortune-cookie.png', 'title' => 'Omikuji Fortune Cookie: HTML5 App'),
   array('href' => 'https://chrome.google.com/webstore/detail/paper-mega-man/benapcddigkllgjhfifafjdakepkicdl?utm_source=chrome-ntp-icon', 'img' => '/img/google-chrome-theme-nintendo-megaman.png', 'title' => 'Google Chrome Theme: Paper Mega Man')
);
?>

<?php get_header(); ?>
<main id="main">
   <div class="container">
      <div class="row section recentworks topspace">
         <?php if (is_front_page()): ?>
            <h2 class="section-title"><span>Recent Works</span></h2>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <?php if (is_front_page()) {
                  remove_filter('the_content', 'wpautop');
               } ?>
               <?php the_content(); ?>

            <?php endwhile; endif; ?>
         <?php else: /* not front page */ ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <div class="jumbotron">
                  <h1 class="coolTitle"><?php the_title(); ?></h1>
               </div>
               <?php if (is_front_page()) {
                  remove_filter('the_content', 'wpautop');
               } ?>
               <?php the_content(); ?>

            <?php endwhile; endif; ?>
            <?php get_sidebar(); ?>
         <?php endif; ?>
      </div>
      <!-- /section -->
   </div>
</main>

<?php get_footer(); ?>

<!-- homepage data start
<div class="thumbnails recentworks row">
   <?php foreach ($data as $d): ?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
         <a class="thumbnail" href="sidebar-right.html">
						<span class="img">
							<img src="<?= $d['img']; ?>" alt="<?= $d['title']; ?>">
							<span class="cover"><span class="more">details &rarr;</span></span>
						</span>
            <span class="title"><?= $d['title']; ?></span>
         </a>
      <span class="details">
         <a href="<?= $d['href']; ?>">details</a>
      </span>
         <h4></h4>

         <p></p>
      </div>
   <?php endforeach; ?>
</div>
homepage data end -->

<?php get_header(); ?>

<?php if (is_front_page()): ?>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php if (is_front_page()) {
         remove_filter('the_content', 'wpautop');
      } ?>
      <?php eval('$data = ' . get_the_content()); ?>

      <div class="container pt">
         <ul class="row mt centered grid effect-5" id="grid">
            <?php foreach ($data as $_data): ?>
               <li class="col-lg-4">
                  <a class="zoom green" href="<?= $_data['href']; ?>">
                     <img class="img-responsive" src="<?= $_data['img']; ?>" alt="<?= $_data['title']; ?>">
                  </a>

                  <p class="lead"><?= $_data['title']; ?></p>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>

   <?php endwhile; endif; ?>
<?php else: /* not front page */ ?>
   <div class="container pt">
      <div class="row mt">
         <div class="col-md-9">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-8 col-lg-offset-2 centered">
               <h3><?php the_title(); ?></h3>
               <hr>
            </div>

            <div class="col-lg-12">
               <?php the_content(); ?>
            </div>

         <?php endwhile; endif; ?>
         </div>
         <div class="col-md-3 well">
            <?php get_sidebar(); ?>
         </div>
      </div>
   </div><!-- /container -->
<?php endif; ?>

<?php get_footer(); ?>

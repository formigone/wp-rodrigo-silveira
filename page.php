<?php get_header(); ?>

<div class="container">
   <div class="row">
      <?php if (is_front_page()): ?>
         <div class="col-md-12">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (is_front_page()) {
               remove_filter('the_content', 'wpautop');
            } ?>
            <?php the_content(); ?>

         <?php endwhile; endif; ?>
         </div><?php /* eo_col-left */ ?>
      <?php else /* not front page */: ?>
         <div class="col-md-9">
         <div class="panel panel-default">
         <div class="panel-body">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="jumbotron">
               <h1 class="coolTitle"><?php the_title(); ?></h1>
            </div>
            <?php if (is_front_page()) {
               remove_filter('the_content', 'wpautop');
            } ?>
            <?php the_content(); ?>

         <?php endwhile; endif; ?>
         </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>
         </div><?php /* eo_col-left */ ?>
         <div class="col-md-3">
         <?php get_sidebar(); ?>
         </div><?php /* eo_col-right */ ?>
      <?php endif; ?>

   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

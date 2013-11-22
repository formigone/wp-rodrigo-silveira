<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <h1 class="coolTitle">\ Blog</h1>

               <p>This is where I post about web development, general programming, desing, graphics stuff, computers in
                  general, and occasionally about less important things, such as life in the real world.</p>

               <ul>
                  <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 23)); ?>
                  <?php foreach ($recent_posts as $recent): ?>

                     <li>
                        <h2>
                           <a
                              href="<?= get_permalink($recent["ID"]); ?>"
                              title="<?php $recent["post_title"]; ?>">
                              <?= $recent["post_title"]; ?>
                           </a>
                        </h2>

                        <div class="post_thumbnail">
                           <a href="<?= get_permalink($recent["ID"]); ?>" alt="<?php $recent["post_title"]; ?>">
                              <?= get_the_post_thumbnail($recent["ID"], 'thumbnail'); ?>
                           </a>
                        </div>

                        <div class="post_summary">
                           <p>
                              <a
                                 href="https://plus.google.com/103737161295645708507?rel=author"
                                 rel="publisher">Rodrigo Silveira</a>
                              on <?= the_modified_date('M j, Y'); ?> @ <?= the_modified_date('g:i a'); ?>

                           <p class="post_summary"><?= $recent['post_excerpt']; ?>
                              <strong>
                                 <a href="<?= get_permalink($recent["ID"]); ?>">Read More</a>
                              </strong>
                           </p>
                        </div>
                     </li>
                  <?php endforeach; ?>
               </ul>
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>
      </div><?php /* eo_col-left */ ?>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div><?php /* eo_col-right */ ?>

   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

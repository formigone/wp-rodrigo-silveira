<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-8">
         <div class="panel panel-default">
            <div class="panel-body">
               <h1 class="coolTitle">\ Blog</h1>

               <p>This is where I post about web development, general programming, desing, graphics stuff, computers in
                  general, and occasionally about less important things, such as life in the real world.</p>

               <ul class="recent_posts">
                  <?php
                  $recent_posts = wp_get_recent_posts(array('numberposts' => 23));
                  foreach ($recent_posts as $recent):?>

                     <li>
                        <h2 class="coolTitle"><a href="<?= get_permalink($recent["ID"]); ?>"
                                                 title="<?php $recent["post_title"]; ?>"><?= $recent["post_title"]; ?></a>
                        </h2>

                        <div class="post_thumbnail">
                           <a href="<?= get_permalink($recent["ID"]); ?>" alt="<?php $recent["post_title"]; ?>">
                              <?= get_the_post_thumbnail($recent["ID"], 'thumbnail'); ?>
                           </a>
                        </div>

                        <div class="post_summary">
                           <p class="post_author" style="margin: 0 0 10px;"><a href="/rodrigo-silveira">Rodrigo
                                 Silveira</a>
                              on <?= the_modified_date('M j, Y'); ?> @ <?= the_modified_date('g:i a'); ?></p>


                           <p class="post_summary"><?= $recent['post_excerpt']; ?> <strong><a
                                    href="<?= get_permalink($recent["ID"]); ?>">Read More</a></strong></p>
                        </div>
                        <div style="height:1px;margin:10px 0;clear:both"></div>
                        <hr/>
                     </li>
                  <?php endforeach; ?>

               </ul>
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>
         <div class="col-md-4">
            <?php get_sidebar(); ?>
         </div><?php /* eo_col-right */ ?>

      </div><?php /* eo_col-left */ ?>
   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

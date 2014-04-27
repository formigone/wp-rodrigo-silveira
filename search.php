<?php get_header(); ?>

<div class="container pt">
   <div class="row mt">
      <div class="col-md-9">
         <div class="col-lg-8 col-lg-offset-2">
            <h2><?php _e('Search Results for: ', 'your-theme'); ?><span><?php the_search_query(); ?></span></h2>
            <hr/>
         </div>

         <?php if (have_posts()) : ?>
            <div class="col-lg-8 col-lg-offset-2">

               <?php
               global $wp_query;
               $total_pages = $wp_query->max_num_pages;
               ?>
               <?php if ($total_pages > 1): ?>
                  <div id="nav-above" class="navigation">
                     <div
                        class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'your-theme')) ?></div>
                     <div
                        class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme')) ?></div>
                  </div><!-- #nav-above -->
               <?php endif; /* if total_pages > 1 */ ?>

               <?php while (have_posts()) : the_post() ?>
                  <a href="<?= get_permalink($recent["ID"]); ?>" title="<?php $recent["post_title"]; ?>">
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  </a>
                  <p class="post_author">
                     <a href="/rodrigo-silveira">Rodrigo Silveira</a> on <?= the_modified_date('M j, Y'); ?>
                     @ <?= the_modified_date('g:i a'); ?>
                  </p>

                  <?php if (get_the_post_thumbnail($recent["ID"], 'thumbnail') !== '') : ?>
                     <div class="post_thumbnail">
                        <a href="<?= get_permalink($recent["ID"]); ?>" alt="<?php $recent["post_title"]; ?>">
                           <?= str_replace('/http:\/\/rodrigo-silveira.com/', '', get_the_post_thumbnail($recent["ID"], 'thumbnail')); ?>
                        </a>
                     </div>

                  <?php endif; /* no thumbnail */ ?>
                  <p class="post_read_more"><a href="<?= get_permalink($recent["ID"]); ?>">Read More</a></p>

                  <div style="height:1px;margin:10px 0;clear:both"></div>
                  <hr/>
               <?php endwhile; /* while have_posts */ ?>
               <?php
               global $wp_query;
               $total_pages = $wp_query->max_num_pages;
               ?>
               <?php if ($total_pages > 1): ?>
                  <div id="nav-below" class="navigation">
                     <div
                        class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'your-theme')) ?></div>
                     <div
                        class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme')) ?></div>
                  </div><!-- #nav-below -->

               <?php endif; /* total_pages > 1 */ ?>
            </div>
         <?php else: /* no posts */ ?>

            <h2 class="coolTitle"><?php _e('Nothing Found', 'your-theme') ?></h2>

            <div class="entry-content">
               <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme'); ?></p>
               <?php get_search_form(); ?>
            </div>
         <?php endif; /* if have_posts */ ?>
      </div>
      <div class="col-md-3 well">
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>

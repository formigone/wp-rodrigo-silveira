<?php get_header(); ?>

<div class="container pt">
   <div class="row mt">
      <div class="col-md-9">

         <div class="col-lg-8 col-lg-offset-2 centered">
            <h3>#<?= single_tag_title('', false); ?></h3>
            <hr>
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

                  <h4><?= get_the_title(); ?></h4>

                  <div class="media">
                     <p class="pull-left">
                        <a href="<?= get_permalink($recent["ID"]); ?>">
                           <?= preg_replace('/http:\/\/rodrigo-silveira.com/', '', get_the_post_thumbnail($recent["ID"], 'thumbnail', array('class' => 'media-object'))); ?>
                        </a>
                        <bd class="text-center"><?= the_modified_date('M j, Y'); ?></bd>
                     </p>

                     <div class="media-body">
                        <p><?= get_the_excerpt(); ?></p>

                        <p>
                           <?php $posttags = get_the_tags(); ?>
                           <?php if ($posttags): ?>
                              <?php foreach ($posttags as $_tag): ?>
                                 <span class="label label-default">
                                          <a href="<?= get_tag_link($_tag->term_id); ?>"
                                             style="color: #fff"><?= $_tag->name; ?></a>
                                       </span>&nbsp;
                              <?php endforeach; ?>
                           <?php endif; ?>
                        </p>
                     </div>
                  </div>

                  <p><a href="<?= get_permalink(); ?>">Continue Reading...</a></p>
                  <hr/>
                  <p><br/></p>

               <?php endwhile; /* while have_posts */ ?>
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

<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <?php if (have_posts()) : ?>

                  <header class="page-header">
                     <h1 class="coolTitle">\
                        <?php if (is_day()) : ?>
                           Daily Archives: <?= get_the_date(); ?>
                        <?php elseif (is_month()) : ?>
                           Monthly Archives: <?= get_the_date('F Y'); ?>
                        <?php elseif (is_year()) : ?>
                           Yearly Archives: <?= get_the_date('Y'); ?>
                        <?php else : ?>
                           Blog Archives
                        <?php endif; ?>
                     </h1><br/>
                  </header>

                  <ul class="recent_posts">
                     <?php while (have_posts()) : the_post(); ?>

                        <li>
                           <h2 class="coolTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                           <div class="post_thumbnail">
                              <a href="<?= get_permalink($recent["ID"]); ?>" alt="<?php $recent["post_title"]; ?>">
                                 <?= get_the_post_thumbnail($recent["ID"], 'thumbnail'); ?>
                              </a>
                           </div>

                           <div class="post_summary">
                              <p class="post_author" style="margin: 0 0 10px"><a href="/rodrigo-silveira">Rodrigo
                                    Silveira</a>
                                 on <?= the_modified_date('M j, Y'); ?> @ <?= the_modified_date('g:i a'); ?></p>

                              <p class="post_summary"><?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php the_author(); ?>
                                 <br/>
                                 <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                              </p>

                              <p class="post_read_more"><strong><a href="<?= get_permalink($recent["ID"]); ?>">Read
                                       More</a></strong>
                              </p>
                           </div>
                           <div style="height:1px;margin:10px 0;clear:both"></div>
                           <hr/>
                        </li>

                     <?php endwhile; ?>

                  </ul>

               <?php else : ?>

                  <article id="post-0" class="post no-results not-found">
                     <header class="entry-header">
                        <h1 class="coolTitle">\ Nothing Found</h1>
                     </header>
                     <div class="entry-content">
                        <p>Apologies, but no results were found for the requested archive. Perhaps searching will help
                           find a related
                           post.</p>
                        <?php get_search_form(); ?>
                     </div>
                  </article><!-- #post-0 -->

               <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <h1 class="coolTitle">\ Tag archives: <?= single_tag_title('', false); ?></h1>
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>

         <?php if (have_posts()) : ?>
            <div class="row">
               <?php while (have_posts()) : the_post(); ?>
                  <div class="col-sm-6">
                     <div class="meBlogTile">
                        <div class="meBlogTileHeader">
                           <a href="<?php the_permalink(); ?>">
                              <?= get_the_post_thumbnail(); ?>
                           </a>
                        </div>

                        <div class="meBlogTileBody">
                           <h3>
                              <a href="<?= get_permalink(); ?>">
                                 <?php the_title(); ?>
                              </a>
                           </h3>

                           <p>
                              <small>
                                 <a
                                    href="https://plus.google.com/103737161295645708507?rel=author"
                                    rel="publisher">Rodrigo Silveira</a>
                                 on <?= the_modified_date('M j, Y'); ?> @ <?= the_modified_date('g:i a'); ?>
                              </small>
                           </p>

                           <p>
                              <?= $recent['post_excerpt']; ?>
                           </p>

                           <p>
                              <?php $posttags = wp_get_post_tags(); ?>
                              <?php if ($posttags): ?>
                                 <?php foreach ($posttags as $_tag): ?>
                                    <span class="label text-muted">
                                    <a href="<?= get_tag_link($_tag->term_id); ?>"><?= $_tag->name; ?></a>
                                 </span>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </p>

                           <div class="clearfix"></div>
                        </div>

                     </div>
                  </div>
               <?php endwhile; ?>
            </div>
         <?php else : ?>

            <article id="post-0" class="post no-results not-found">
               <header class="entry-header">
                  <h1>\ Nothing Found</h1>
               </header>
               <!-- .entry-header -->

               <div class="entry-content">
                  <p>Apologies, but no results were found for the requested archive. Perhaps searching will help
                     find a related
                     post.</p>
                  <?php get_search_form(); ?>
               </div>
               <!-- .entry-content -->
            </article><!-- #post-0 -->

         <?php endif; ?>

      </div>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <h1 class="coolTitle">Blog</h1>

               <p>Welcome to my tech blog! The main purpose of this blog is for me to post notes about things I've
                  learned, demonstrations of things I've coded, the occasional tutorial, etc.</p>
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>

         <div class="row">
            <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 50)); ?>
            <ul class="grid effect-<?= rand(1, 8); ?>" id="grid">
               <?php foreach ($recent_posts as $recent): ?>
                  <li>
                     <div class="gridCard">
                        <div class="meBlogTile">
                           <div class="meBlogTileHeader">
                              <a href="<?= get_permalink($recent["ID"]); ?>">
                                 <?= get_the_post_thumbnail($recent["ID"], 'thumbnail'); ?>
                              </a>
                           </div>

                           <div class="meBlogTileBody">
                              <h3>
                                 <a href="<?= get_permalink($recent["ID"]); ?>">
                                    <?= $recent["post_title"]; ?>
                                 </a>
                              </h3>

                              <p>
                                 <small>
                                    <a
                                       href="https://plus.google.com/103737161295645708507?rel=author"
                                       rel="publisher">Rodrigo Silveira</a>, <?= the_modified_date('M j, Y'); ?>
                                 </small>
                              </p>

                              <p>
                                 <?= $recent['post_excerpt']; ?>
                              </p>

                              <p>
                                 <?php $posttags = wp_get_post_tags($recent["ID"]); ?>
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
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>

      </div><?php /* eo_col-left */ ?>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div><?php /* eo_col-right */ ?>

   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

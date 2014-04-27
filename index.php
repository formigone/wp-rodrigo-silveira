<?php get_header(); ?>

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
                           <span class="label label-default">
                                          <a href="<?= get_tag_link($_tag->term_id); ?>"><?= $_tag->name; ?></a>
                                       </span>&nbsp;
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>

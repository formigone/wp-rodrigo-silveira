<?php get_header(); ?>

<div class="container pt">
   <div class="row mt">
      <div class="col-md-9">
         <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 50)); ?>
         <?php foreach ($recent_posts as $recent): ?>

            <div class="col-lg-8 col-lg-offset-2">
               <p>
                  <img src="<?php bloginfo("template_url"); ?>/img/rodrigo-silveira.jpg" width="50px" height="50px"
                       class="img-circle">
                  <ba>
                     <a
                        href="https://plus.google.com/103737161295645708507?rel=author"
                        rel="publisher" style="color: #333">Rodrigo Silveira</a>
                  </ba>
               </p>
               <p>
                  <bd><?= the_modified_date('M j, Y'); ?></bd>
               </p>
               <h4><?= $recent["post_title"]; ?></h4>

               <div class="media">
                  <a class="pull-left" href="<?= get_permalink($recent["ID"]); ?>">
                     <?= get_the_post_thumbnail($recent["ID"], 'thumbnail', array('class' => 'media-object')); ?>
                  </a>
                  <div class="media-body">
                     <p><?= $recent['post_excerpt']; ?></p>

                     <p>
                        <?php $posttags = wp_get_post_tags($recent["ID"]); ?>
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

               <p><a href="<?= get_permalink($recent["ID"]); ?>">Continue Reading...</a></p>
               <hr/>
               <p><br/></p>
            </div>
         <?php endforeach; ?>
      </div>
      <div class="col-md-3 well">
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>

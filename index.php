<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <h1 class="coolTitle">\ Blog</h1>

               <p>Welcome to my tech blog! The main purpose of this blog is for me to post notes about things I've
                  learned, demonstrations of things I've coded, the occasional tutorial, etc.</p>
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>

               <?php
               $postMaster = array(
                  "url" => "#",
                  "title" => "My post titlee",
                  "img" => "/wp-content/uploads/2013/01/jquery-plugin-syntax-highlighing.png",
                  "date" => "jan 23, 2014",
                  "summary" => "Before you first meet with project stakeholders for a website design or redesign, you’ll want to prepare yourself by researching the company the website represents and the nature of the audience it serves. You also need to familiarize yourself",
                  "tags" => array("tag 1", "tag 2", "tag 3", "tag 4")
               );

               $posts = array();
               for ($i = 0; $i < 23; $i++) {
                  array_push($posts, $postMaster);
               }
               ?>
               <div class="row">
                  <?php foreach ($posts as $_post): ?>
                     <div class="col-sm-6">
                        <div class="meBlogTile">
                           <a href="<?= $_post["url"]; ?>">
                              <img src="<?= $_post["img"]; ?>"/>
                           </a>

                           <h1><?= $_post["title"]; ?></h1>

                           <p><?= $_post["summary"]; ?></p>

                           <p><a href="<?= $_post["url"]; ?>" class="btn btn-success">Continue reading</a> </p>

                           <p>
                              <?php foreach ($_post["tags"] as $_tag): ?>
                                 <span class="label">
                                    <a href="#"><?= $_tag; ?></a>
                                 </span>
                              <?php endforeach; ?>
                              <?= $_post["date"]; ?>
                           </p>
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>

               <ul style="display: none">
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
      </div><?php /* eo_col-left */ ?>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div><?php /* eo_col-right */ ?>

   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

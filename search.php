<?php get_header();?>

<h1 class="coolTitle">\Search Results</h1>

<?php ///////////////////////////////////////////////////// ?>

<?php if ( have_posts() ) : ?>
 
<h3 class="coolTitle"><?php _e( 'Search Results for: ', 'your-theme' ); ?><span><?php the_search_query(); ?></span></h3>
 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
		<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
	</div><!-- #nav-above -->
<?php } ?>                            


<ul class="recent_posts">
 
<?php while ( have_posts() ) : the_post() ?>
 

<li>

  <?php if(get_the_post_thumbnail( $recent["ID"], 'thumbnail') !== '') :?>

   <div class="post_thumbnail">
      <a href="<?= get_permalink($recent["ID"]);?>" alt="<?php $recent["post_title"];?>">
         <?= get_the_post_thumbnail( $recent["ID"], 'thumbnail'); ?>
      </a>
   </div>

   <div class="post_summary">

   <?php else: ?>
	<div class="post_summary" style="width:100%">
   <?php endif; ?>

      <a href="<?= get_permalink($recent["ID"]);?>" title="<?php $recent["post_title"];?>">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <p class="post_author"><a href="/rodrigo-silveira">Rodrigo Silveira</a> on <?= the_modified_date('M j, Y');?> @ <?= the_modified_date('g:i a');?></p>

<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
	<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>

         <p class="post_read_more"><a href="<?= get_permalink($recent["ID"]); ?>">Read More</a></p>
   </div>
<div style="height:1px;margin:10px 0;clear:both"></div>
<hr/>
</li>


<?php endwhile; ?>

</ul>
 
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                </div><!-- #nav-below -->

<?php } ?>            
 
<?php else : ?>
 
                <div id="post-0" class="post no-results not-found">
                    <h2 class="coolTitle"><?php _e( 'Nothing Found', 'your-theme' ) ?></h2>
                    <div class="entry-content">
                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'your-theme' ); ?></p>
    <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </div>
 
<?php endif; ?>

<?php ///////////////////////////////////////////////////// ?>

<?php get_sidebar();?>

<?php get_footer();?>
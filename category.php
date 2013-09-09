<?php get_header();?>

<?php if ( have_posts() ) : ?>


	<header class="page-header">
		<h1>\ Category Archives: <?= single_tag_title( '', false ); ?></h1><br/>
		<?php
			$tag_description = tag_description();
			if ( ! empty( $tag_description ) )
				echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		?>
	</header>

<ul class="recent_posts">


	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

<li>
   <h2 class="coolTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <div class="post_thumbnail">
      <a href="<?= get_permalink($recent["ID"]);?>" alt="<?php $recent["post_title"];?>">
         <?= get_the_post_thumbnail( $recent["ID"], 'thumbnail'); ?>
      </a>
   </div>

   <div class="post_summary">
         <p class="post_author"><a href="/rodrigo-silveira">Rodrigo Silveira</a> on <?= the_modified_date('M j, Y');?> @ <?= the_modified_date('g:i a');?></p>

<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
	<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>

         <p class="post_read_more"><a href="<?= get_permalink($recent["ID"]); ?>"><strong>Read More</strong></a></p>
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
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; ?>


<?php get_sidebar();?>

<?php get_footer();?>
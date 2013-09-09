<?php get_header();?>



<?php
/**
 * ***************************************
 * what will appear on the blog main page
 * ***************************************
 */
?>

<h1 class="coolTitle">\ Blog</h1>
<p>This is where I post about web development, general programming,
	desing, graphics stuff, computers in general, and occasionally about
	less important things, such as life in the real world.</p>
<hr />

<ul class="recent_posts">
<?php
$recent_posts = wp_get_recent_posts(array(
   'numberposts' => 23
));
foreach ($recent_posts as $recent) :
   ?>

<li>
		<h2 class="coolTitle">
			<a href="<?= get_permalink($recent["ID"]);?>"
				title="<?php $recent["post_title"];?>"><?= $recent["post_title"]; ?></a>
		</h2>
		<div class="post_thumbnail">
			<a href="<?= get_permalink($recent["ID"]);?>"
				alt="<?php $recent["post_title"];?>">
         <?= get_the_post_thumbnail( $recent["ID"], 'thumbnail'); ?>
      </a>
		</div>

		<div class="post_summary">
			<p class="post_author" style="margin: 0 0 10px;">
				<a href="/rodrigo-silveira">Rodrigo Silveira</a> on <?= the_modified_date('M j, Y');?> @ <?= the_modified_date('g:i a');?></p>

<?php

   //
   // generate excerpt using first x words of post
   //

   // display the first 75 words of post
   /**
    * *********************************************************************
    * $words = 70;
    * $preview = preg_split('/[\s]+/', $recent['post_excerpt'], $words + 1);
    * $preview = array_slice($preview, 0, $words);
    * $preview = join(' ', $preview);
    * *********************************************************************
    */
   ?>

         <p class="post_summary"><?= $recent['post_excerpt']; ?> <strong><a
					href="<?= get_permalink($recent["ID"]); ?>">Read More</a></strong>
			</p>
		</div>
		<div style="height: 1px; margin: 10px 0; clear: both"></div>
		<hr />
	</li>
      <?php endforeach; ?>



<?php get_sidebar();?>
</div>
<?php get_footer();?>
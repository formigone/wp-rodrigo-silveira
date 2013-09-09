<?php get_header();?><!-- Def main --><!-- Def main > container  -->

<div class="col-md-8 blog-posts"><!-- Def main > container > left-col  -->
<?php if (have_posts()) : while (have_posts()) : the_post();?>

<h1 class="coolTitle"><?php the_title();?></h1>
<?php if (is_front_page()) remove_filter( 'the_content', 'wpautop' ); ?>
<?php the_content();?>

<?php endwhile; endif; ?>

</div> <!-- End main > container > left-col  -->
<div class="col-md-4"><!-- Def main > container > right-col  -->
<?php get_sidebar();?>
</div> <!-- End main > container > right-col  -->

</div> <!-- End main > container  -->
</div> <!-- End main -->
<?php get_footer();?>

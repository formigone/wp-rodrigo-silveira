<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

<h1 class="coolTitle"><?php the_title();?></h1>
<?php if (is_front_page()) remove_filter( 'the_content', 'wpautop' ); ?>
<?php the_content();?>

<?php endwhile; endif; ?>


<?php get_sidebar();?>

<?php get_footer();?>
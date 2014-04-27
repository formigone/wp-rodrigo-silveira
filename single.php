<?php get_header(); ?>

<div class="container pt">
   <div class="row mt">
      <div class="col-md-9">

         <?php while (have_posts()): the_post(); ?>
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

            <h1><?php the_title(); ?></h1>

         <?php the_content(); ?>

            <p id="gp_fake_spacer">&nbsp;</p>
            <script src="https://apis.google.com/js/plusone.js"></script>
            <div id="gp_comments"></div>
            <script>
               gapi.comments.render('gp_comments', {
                  href: window.location,
                  width: $("#gp_fake_spacer").width() - 10,
                  first_party_property: 'BLOGGER',
                  view_type: 'FILTERED_POSTMOD'
               });
            </script>
         <?php endwhile; ?>
      </div>
      <div class="col-md-3 well">
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>
<?php get_footer(); ?>

<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c0f5850d6a6558"></script>
<script>
   addthis.layers({
      'theme': 'transparent',
      'share': {
         'position': 'left',
         'numPreferredServices': 5
      },
      'follow': {
         'services': [
            {'service': 'facebook', 'id': 'rodrigo.silveira.web.developer'},
            {'service': 'linkedin', 'id': 'rodrigo0silveira'},
            {'service': 'google_follow', 'id': '+RodrigoSilveiraSoftware'}
         ]
      }
   });
</script>
<!-- AddThis Smart Layers END -->

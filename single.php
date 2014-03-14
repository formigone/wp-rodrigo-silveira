<?php get_header(); ?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">

               <?php while (have_posts()): the_post(); ?>
                  <h1><?php the_title(); ?></h1>
                  <p>Author:
                     <a
                        href="https://plus.google.com/103737161295645708507?rel=author"
                        rel="publisher">Rodrigo Silveira</a>
                  </p>
                  <div
                     style="margin: 5px 0; padding: 5px 0; border-top: 1px solid #aaa; border-bottom: 1px solid #aaa;">
                     <!-- AddThis Button BEGIN -->
                     <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_preferred_11"></a>
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_6"></a>
                        <a class="addthis_button_preferred_8"></a>
                        <a class="addthis_button_preferred_10"></a>
                        <a class="addthis_button_preferred_13"></a>
                        <a class="addthis_button_preferred_14"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <a class="addthis_button_preferred_4"></a>
                        <a class="addthis_button_preferred_5"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                     </div>
                     <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                     <script type="text/javascript"
                             src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c0f5850d6a6558"></script>
                     <!-- AddThis Button END -->
                  </div>

                  <?php the_content(); ?>

<blockquote><h1>\ Post your comments</h1></blockquote>

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
            </div><?php /* eo_panel > body */ ?>
         </div><?php /* eo_panel */ ?>
      </div><?php /* eo_col-left */ ?>

      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div><?php /* eo_col-right */ ?>
   </div><?php /* eo_row */ ?>
</div><?php /* eo_container */ ?>

<?php get_footer(); ?>

<!-- AddThis Welcome BEGIN -->
<script
   type="text/javascript"
   src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c0f5850d6a6558"></script>
<script
   type='text/javascript'>
   addthis.bar.initialize({'default': {
      "backgroundColor": "#000000",
      "buttonColor": "#24B300",
      "textColor": "#FFFFFF",
      "buttonTextColor": "#FFFFFF"
   }, rules: [
      {
         "name": "Twitter",
         "match": {
            "referringService": "twitter"
         },
         "message": "If you find this page helpful:",
         "action": {
            "type": "button",
            "text": "Tweet it!",
            "verb": "share",
            "service": "twitter"
         }
      },
      {
         "name": "Facebook",
         "match": {
            "referringService": "facebook"
         },
         "message": "Tell your friends about this article:",
         "action": {
            "type": "button",
            "text": "Share on Facebook",
            "verb": "share",
            "service": "facebook"
         }
      },
      {
         "name": "Google",
         "match": {
            "referrer": "google.com"
         },
         "message": "If you like this page, let Google know:",
         "action": {
            "type": "button",
            "text": "+1",
            "verb": "share",
            "service": "google_plusone_share"
         }
      }
   ]});
</script>
<!-- AddThis Welcome END -->


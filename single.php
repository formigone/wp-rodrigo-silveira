<?php get_header();?><!-- Def main --><!-- Def main > container  -->

<div class="col-md-8 blog-posts"><!-- Def main > container > left-col  -->
<h1 class="coolTitle">\ <?php the_title(); ?></h1>
<p>
	Author: <a
		href="https://plus.google.com/103737161295645708507?rel=author"
		rel="publisher">Rodrigo Silveira</a>
</p>

<div
	style="margin: 5px 0; padding: 5px 0; border-top: 1px solid #aaa; border-bottom: 1px solid #aaa;">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
		<a class="addthis_button_preferred_11"></a> <a
			class="addthis_button_preferred_1"></a> <a
			class="addthis_button_preferred_2"></a> <a
			class="addthis_button_preferred_6"></a> <a
			class="addthis_button_preferred_8"></a> <a
			class="addthis_button_preferred_10"></a> <a
			class="addthis_button_preferred_13"></a> <a
			class="addthis_button_preferred_14"></a> <a
			class="addthis_button_preferred_3"></a> <a
			class="addthis_button_preferred_4"></a> <a
			class="addthis_button_preferred_5"></a> <a
			class="addthis_button_compact"></a> <a
			class="addthis_counter addthis_bubble_style"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
	<script type="text/javascript"
		src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c0f5850d6a6558"></script>
	<!-- AddThis Button END -->
</div>


<?php if( have_posts() ):?>
<?php while( have_posts() ): the_post();?>
   <?php the_content();?>
<?php endwhile;?>
<?php endif;?>

<hr />
<?php
/**
 * **************************************************
 * Related Posts
 * ****************************************************
 */
if (function_exists('echo_ald_crp'))
   echo_ald_crp();
?>

<hr />


<h1 class="coolTitle">\ Post your comments</h1>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=131034187065096";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?= the_permalink(); ?>"
	data-width="320" data-num-posts="23"></div>

</div> <!-- End main > container > left-col  -->
<div class="col-md-4"><!-- Def main > container > right-col  -->
<?php get_sidebar();?>
</div> <!-- End main > container > right-col  -->

</div> <!-- End main > container  -->
</div> <!-- End main -->
<?php get_footer();?>

<!-- AddThis Welcome BEGIN -->
<script type="text/javascript"
	src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c0f5850d6a6558"></script>
<script type='text/javascript'>
addthis.bar.initialize({'default':{
	"backgroundColor": "#000000",
	"buttonColor": "#24B300",
	"textColor": "#FFFFFF",
	"buttonTextColor": "#FFFFFF"
},rules:[
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

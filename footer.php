<div id="footer">
   <div class="container">
      <ul>
         <li><strong>R:\></strong></li>
         <li><a href="/coding/" id="footerLinkCoding">coding</a></li>
         <li><a href="/design/" id="footerLinkDesign">design</a></li>
         <li><a href="/rodrigo-silveira/" id="footerLinkAbout">about_me</a></li>
         <li><a href="/blog" id="footerLinkBlog">blog</a></li>
         <li><a href="/contact-me/" id="footerLinkContact">contact</a></li>
      </ul>
      <p class="pull-right">Copyright (c) 2011
         <a href="https://plus.google.com/103737161295645708507?rel=author" rel="publisher">
            Rodrigo Silveira</a>. All rights reserved.</p>
   </div>
</div>
<script src="<?php bloginfo("template_url"); ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/imagesloaded.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/classie.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/AnimOnScroll.js"></script>

<script>
   $(function(){
      new AnimOnScroll( document.getElementById( 'grid' ), {
         minDuration : 0.4,
         maxDuration : 0.7,
         viewportFactor : 0.2
      } );
   });
</script>

<script>
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-15090706-1']);
   _gaq.push(['_trackPageview']);
   (function () {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
   })();
</script>
</body>
</html>
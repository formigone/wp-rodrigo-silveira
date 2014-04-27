<div id="footer">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <h4>My Bunker</h4>
            <p>
               Some Address 987,<br/>
               +34 9054 5455, <br/>
               Madrid, Spain.
            </p>
         </div><!-- /col-lg-4 -->

         <div class="col-lg-4">
            <h4>My Links</h4>
            <p>
               <a href="#">Dribbble</a><br/>
               <a href="#">Twitter</a><br/>
               <a href="#">Facebook</a>
            </p>
         </div><!-- /col-lg-4 -->

         <div class="col-lg-4">
            <h4>About Stanley</h4>
            <p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
         </div><!-- /col-lg-4 -->

      </div>

   </div>
</div>

<script src="<?php bloginfo("template_url"); ?>/assets/js/bootstrap.min.js"></script>
<script data-no-instant src="<?php bloginfo("template_url"); ?>/js/masonry.pkgd.min.js"></script>
<script data-no-instant src="<?php bloginfo("template_url"); ?>/js/imagesloaded.js"></script>
<script data-no-instant src="<?php bloginfo("template_url"); ?>/js/classie.js"></script>
<script data-no-instant src="<?php bloginfo("template_url"); ?>/js/AnimOnScroll.js"></script>
<script src="<?php bloginfo("template_url"); ?>/js/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
   InstantClick.init();
</script>

<script data-no-instant>
   var animScroll = function () {
      new AnimOnScroll(document.getElementById('grid'), {
         minDuration: 0.4,
         maxDuration: 0.7,
         viewportFactor: 0.2
      });
   };


   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-15090706-1']);
   _gaq.push(['_trackPageview']);

   var doGaq = function () {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
   };

   InstantClick.on('change', animScroll);
   InstantClick.on('change', doGaq);

   animScroll();
   doGaq();
</script>
</body>
</html>

<div id="footer">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <h4>Site Sections</h4>
            <p>
               <a href="/">Home</a><br/>
               <a href="/coding">Coding</a><br/>
               <a href="/design">Design</a><br/>
               <a href="/rodrigo-silveira">About me</a><br/>
               <a href="/blog">Blog</a><br/>
               <a href="/contact-me">Contact</a>
            </p>
         </div>
         <div class="col-lg-4">
            <h4>Social Accounts</h4>
            <p>
               <a href="#">Google+</a><br/>
               <a href="#">Youtube</a><br/>
               <a href="#">LinkedIn</a><br/>
               <a href="#">Facebook</a><br/>
               <a href="#">GitHub</a><br/>
               <a href="#">Stack Overflow</a>
            </p>
         </div>

         <div class="col-lg-4">
            <h4>About Stanley</h4>
            <p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
         </div>
      </div>
      <p class="text-copyright">&copy; 2009-<?= date('Y', time()); ?> Rodrigo Silveira. All rights reserved.</p>
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

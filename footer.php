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
               <a href="https://plus.google.com/+RodrigoSilveiraSoftware/posts">Google+</a><br/>
               <a href="https://www.youtube.com/user/12ig0">Youtube</a><br/>
               <a href="https://www.linkedin.com/in/rodrigo0silveira">LinkedIn</a><br/>
               <a href="https://www.facebook.com/rodrigo.silveira.web.developer">Facebook</a><br/>
               <a href="https://github.com/formigone">GitHub</a><br/>
               <a href="http://stackoverflow.com/users/774907/rodrigo-silveira">Stack Overflow</a>
            </p>
         </div>

         <div class="col-lg-4">
            <h4>Mission Statement</h4>
            <span class="text-muted">I don't know who you are. I don't know what you want. If you are looking for average, I can tell you I don't have that in me. But what I do have are a very particular set of skills, skills I have acquired over a very long career. Skills that make me a dream-come-true for people like you. If you don't care about greatness, that'll be the end of it. I will not look for you, I will not pursue you. <br/>.
               But if you do... <a href="/contact-me">#!/let/me/know --now</a></span>
         </div>
      </div>
      <p class="text-copyright">
         <img src="/favicon.png" class="img-circle" style="width: 24px;margin: -5px 10px 0 0;"> &copy; 2009-<?= date('Y', time()); ?> Rodrigo Silveira. All rights reserved.</p>
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
      try {
         new AnimOnScroll(document.getElementById('grid'), {
            minDuration: 0.4,
            maxDuration: 0.7,
            viewportFactor: 0.2
         });
      } catch(e){}
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

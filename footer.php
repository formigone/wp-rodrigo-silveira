<div id="footer">
<div class="w980">
<ul>
<li>R:\navigation> </li>
<li><a href="/coding/" id="footerLinkCoding">/coding</a></li>
<li><a href="/design/" id="footerLinkDesign">/design</a></li>
<li><a href="/rodrigo-silveira/" id="footerLinkAbout">/about_me</a></li>
<li><a href="/blog" id="footerLinkBlog">/blog</a></li>
<li><a href="/contact-me/" id="footerLinkContact">/contact</a></li>
</ul>
<p class="copy mono wide">Copyright (c) 2011 <a href="https://plus.google.com/103737161295645708507?rel=author" rel="publisher" style="display: inline; margin: 0; color: #050">Rodrigo Silveira</a>. All rights reserved.</p>
</div>
</div>
<script language="javascript" type="text/javascript" defer="defer">
/*
function rotate(a){var b=6500;var c=800;var d=$("#"+a+" li:last-child");var e=$(d).css("width");$(d).animate({opacity:.2},c,function(){$("#"+a+" li:first-child").before($(d));$(d).show();$(d).css({opacity:1});setTimeout(function(){rotate(a)},b)})}setTimeout(function(){rotate("navaction")},3500)
*/
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-15090706-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

$("#homelink").click(function(){       trackNav("Main Nav", "Home");     });
$("#navLinkCoding").click(function(){  trackNav("Main Nav", "Coding");   });
$("#navLinkDesign").click(function(){  trackNav("Main Nav", "Design");   });
$("#navLinkAbout").click(function(){   trackNav("Main Nav", "About me"); });
$("#navLinkBlog").click(function(){    trackNav("Main Nav", "Blog");     });
$("#navLinkContact").click(function(){ trackNav("Main Nav", "Contact");  });

$("#footerLinkCoding").click(function(){ trackNav("Footer Nav", "Coding");  });
$("#footerLinkDesign").click(function(){ trackNav("Footer Nav", "Design");  });
$("#footerLinkAbout").click(function(){  trackNav("Footer Nav", "About me"); });
$("#footerLinkBlog").click(function(){   trackNav("Footer Nav", "Blog");     });
$("#navLinkContact").click(function(){   trackNav("Footer Nav", "Contact");  });

</script>
</body>
</html>
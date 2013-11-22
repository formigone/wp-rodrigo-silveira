<?php get_header();?>

<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="jumbotron">
                  <h1>Error 404 <small>Page Not Found ='(</small></h1>
                  <p>The page you are looking for could not be found.</p>
               </div>

               <h3>Here are a few useful links that might help you:</h3>
               <ul style="font-size: 1.5em;line-height:2.0em">
                  <li><a href="/coding">My software portfolio</a></li>
                  <li><a href="/design">My design portfolio</a></li>
                  <li><a href="/blog">My tech blog</a></li>
               </ul>
            </div>
         </div>
      </div>

      <div class="col-md-3">
         <?php get_sidebar();?>
      </div>
   </div>
</div>

<?php get_footer();?>
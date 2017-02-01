<?php 
  // Page Settings
  $page_title = "Modern Theme - Error";
  $page_name = "Error";
  $page_template = "detail";
  $page_masthead_image_url = "/img/clouds-20kb.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Sorry, Error 404</h1>
  <p>The page you were looking for doesn't exist. Cannot find "<strong><?= $page_url ?></strong>". Try our <a href="/site-map">site map</a> to find the page you were looking for.</p>

</div>

<?php $page_content = ob_get_clean(); ?>
<?php 
  // Page Settings
  $page_title = $site_title." - Error";
  $page_name = "Error";
  $page_template = "detail";
  $page_masthead_image_url = "/img/maps.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Sorry, Error 404</h1>
  <p>The page you were looking for doesn't exist. Cannot find "<strong><?= $page_url ?></strong>". 
  <br>Try the links below to find the page you were looking for.</p>
  <?php include 'includes/site_nav.php'; ?>

</div>

<?php $page_content = ob_get_clean(); ?>
<?php 
  // Page Settings
  $page_title = $site_title." - Site Map";
  $page_name = "Site Map";
  $page_template = "detail";
  $page_masthead_image_url = "/img/clouds-20kb.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Site Map</h1>
  <p>Where you looking for something specific? Try the links below to find what you are looking for.</p>
  <?php include 'includes/site_nav.php'; ?>

</div>

<?php $page_content = ob_get_clean(); ?>
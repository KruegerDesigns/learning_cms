<?php 
  // Page Settings
  $page_title = $site_title." - Home";
  $page_name = "Homepage";
  $page_template = "home";
  $page_masthead_image_url = "/img/clouds-50mb.gif";

  ob_start(); 
?>

<div class="container">

  <h1>This is the H1 heading</h1>
  <p>This is a starter theme created by Adam Krueger. The theme is mobile friendly and being used to test some PHP scirpts.</p>

</div>

<?php $page_content = ob_get_clean(); ?>
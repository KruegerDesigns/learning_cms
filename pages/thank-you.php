<?php 
  // Page Settings
  $page_title = $site_title." - Thank You";
  $page_name = "Thank You";
  $page_template = "detail";
  $page_masthead_image_url = "/img/thank-you.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Thank You</h1>
  <p>Thank you for filling out the form. If you're seeing this page that means the form works!</p>

</div>

<?php $page_content = ob_get_clean(); ?>
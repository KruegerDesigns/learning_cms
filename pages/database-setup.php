<?php 
  // Page Settings
  $page_parent = "";
  $page_path = $page_parent."/database-setup";
  $page_title = $site_title." - Database Setup";
  $page_name = "Database Setup";
  $page_template = "detail";
  $page_body_class = "database-setup";
  $page_masthead_image_url = "/img/clouds-20kb.jpg";

  ob_start(); 
?>

<div class="container">

  <h1>Click To Setup The Databse</h1>
  <p>Use this page to create the Tables for the Database. By submitting the form below you will be creating the MySQL table "<strong>Form</strong>" that will hold all the records for the <em>form</em> on this site.</p>
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <button type="submit" name="createDatabase" class="cta-button cta-filled">Create Database!</button>
  </form>

</div>

<?php $page_content = ob_get_clean(); ?>
<?php 
  include 'includes/app_functions.php';

  // execution starts here
  if(isset($_POST['sendForm'])) {
    // call form handler
    $errorMsg = validateFeedbackForm($_POST);
  }

  // Site Settings
  $site_title = "Modern Theme";

  // Page Settings
  $page_parent = "";
  $page_path = $page_parent."";
  $page_title = $site_title."";
  $page_name = "";
  $page_template = "";
  $page_body_class = "";
  $page_masthead_image_url = "";

  $page_url=$_GET['page_url'];

  if($page_url=='all-the-things') {
      include('pages/all-the-things.php'); // Home page
  } else if($page_url=='database-results') {
      include('pages/database-results.php'); // Login page
  } else if($page_url=='form-processing') {
      include('pages/form-processing.php'); // Terms page
  } else if($page_url=='') {
      include('pages/home.php'); // Terms page
  } else if($page_url=='lets-edit-stuff') {
      include('pages/lets-edit-stuff.php'); // Terms page
  } else if($page_url=='thank-you') {
      include('pages/thank-you.php'); // Terms page
  } else if($page_url=='site-map') {
      include('pages/site-map.php'); // Terms page
  } else {
      include('pages/error.php'); // error page
  }

?>

<?php include 'includes/site_head.php'; ?>
<?php include 'includes/site_svgs.php'; ?>

<div id="wrap">

  <!-- Navigation Bar -->
  <?php include 'includes/site_navbar.php'; ?>

  <!-- Masthead -->
  <?php include 'includes/site_masthead.php'; ?>
  
  <!-- Content -->
  <?= $page_content ?>
  
  <!-- Footer -->
  <?php include 'includes/site_footer.php'; ?>
    
</div>
<?php include 'includes/site_footer_scripts.php'; ?>
</body>
</html>